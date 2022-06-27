<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class SplitVideo extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'App';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'split:video';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'split:video [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $video      = isset($params[0]) ? $params[0] : null;
        $start_at   = isset($params[1]) ? $params[1] : null;
        $split_time = isset($params[2]) ? $params[2] : null;

        if(count($params) < 3) {
            CLI::error('Please provide a video file and split time.');
            return;
        }

        CLI::write("Run Started");
        CLI::write("video : ".$video);
        CLI::write("start_at : ".$start_at);
        CLI::write("split_time : ".$split_time);

        $validation = \Config\Services::validation();

        //$val_video      = $validation->check($video, 'required|check_video_exists');
        $val_video      = $validation->check($video, 'required');
        $val_start_at   = $validation->check($start_at, 'required|valid_date[H:s]');
        $val_split_time = $validation->check($split_time, 'required|is_natural');

        if(!($val_video && $val_start_at && $val_split_time))
        {
            CLI::error('validation error');
            return;            
        }

        CLI::write("run python ".ROOTPATH . "/py/run.py 2>&1");

        $message = exec("python ".ROOTPATH . "/py/run.py 2>&1");
        CLI::write($message);

        //CLI::error($val_video);
        //CLI::error($val_start_at);
        //CLI::error($val_split_time);
    }
}
