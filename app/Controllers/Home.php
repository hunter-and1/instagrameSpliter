<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        return view('index');
    }

    public function ajax_upload()
    {
        /* mp4 ogv webm ogg mp3 wav m4a */
        $maxfile = 1024 * 100;
        $input = $this->validate([
            'formFile' => [
                'uploaded[formFile]',
                'mime_in[formFile,video/mp4,video/ogg,video/webm,audio/webm,audio/wav,audio/ogg,audio/mpeg,video/mpeg]',
                'max_size[formFile,'.$maxfile.']',
            ]
        ]);

        if (!$input) {
            return $this->response->setJSON([
                'error'=>true,
                'message'=>'Choose a valid file'
            ]);
        } 
        
        $video = $this->request->getFile('formFile');
        $video->move(WRITEPATH . 'uploads');

        $data = [
            'name' =>  $video->getName(),
            'type'  => $video->getClientMimeType()
        ];

        return $this->response->setJSON([
            'error' =>false,
            'message'=>'File has successfully uploaded',
            'data' => $data
        ]);   
    }

    public function download(){
        //https://dr.sf-converter.com/download?id=d4e09cff2d28d104fab9baf8ec74bd836aedbc2f9430caacb059c739e88c9122&payload=1*eJzVU9uOqzYU%2FZVopPFTyYABk4xkHRFyI%2Fd7MlNViIBDTLiFa0jVT%2Blbv6xfUkPmtFOpL6fqQ4%2BElo1he3ut5fXzUxJmsUW2sff0%2BnRO0yh5fXkpiqJZhlmaHUnTCv2Xwkyt85ccz3flcVuQ%2Fn2bPP3wUanb31xoZjYN%2F94xjhHHcUnAnSNTuQQKaTph6HgkpzYJ663qWeSZ5dG0Ll%2FILaIxwQKSkSiLgqwAQvFoBOW3POjNF4P9zVAXKeJSXu0BGmFBQU0Byk0o8k2BB9TGIad2vWl26eSqAEt5Hl9Q4eqdw%2FByLpU7jYXYit%2FUoaNqs4UgAJqaDhYkHjxY4w%2BWICbXjJ0kSTxckgT4ZyxnwPexKDxDDbaBH%2BBPrNjax9s9IDbwE2xmbC22WU2OfQYUIxB5GEqABjS1isA%2BRkl1fARl1jyysBRaO03K3zcTa0FhZ9d2%2B7yRdyUNLqYrqoM8inMsAJ%2F6BNdKP8O%2BH0kgSHChupCMbap5G7uIOGuc7cb9YTgADo3r41seCbCI2hJqIWBnMYaw1YQyBJ6fMrEhkqW20EaCqLQlEdRrzACRKSuAU850FsGFkMj0aE7qDU%2FMKEaG51mJWCnCpgqUELDwvtcBKfvK7BMghCDA267pniaDgzQebk4qI2vGJpPo4TUrJpQBjSqwK2CWVILWhlQq%2FmlFtRpZDCst2FBpwYYgYcCoMqyIsoFRZMjIAe9rN%2F9cFfgVVH%2F4VY1fb5JX7aNq80%2FWsELqYHUgasZNLVZL3RnsdxAmazIv1n7Sf1vo2TRN%2BaW1P3P7k2W0pm0bls49QktH05cal%2B%2FeDx1PflcPW5m2%2BhTGdzMNRpzTDdtwd3T9u7ncjGZw5TyLXfaAuuH8yi9HrWKl6s4oKIT%2Bxe%2Ftpe1VO7hlAYvuvb27IJKLg%2Fl1ONpQ%2BdgetLJFT9MH8QzNSWD0zWWJOuebvzvo2Ww3pl7ec%2Bl8kchhvi%2BO16M5Y0mtQ%2FddJlVEwKxmLDtidfEEUapRrhFViPj6QsIaH5dTqlGpUGnVAa5Q5OH3FfvagW%2BNPWwhqY7119wLbelz7iGviHKLZ8f5z3KP%2FlXuH77%2B35Lv6Gd15mXqJLy5e%2BqiaVp6dLg4LbbHY793Hwz3l3jNTdxrd3J583WV9lRUipvCum6OuR%2BuAsuI3dvdtkX6XqbDjb1xXWLOksHdOW2m%2F5T7saUrY1fO1yvqr8uDMjnAvX01JgYL2drKZgZ%2F6uh9y5JtXdP7ZZQVes%2BYs0sXrXRtmkJtYNNo8z5Zjbgg5LaLwAjuW8XgWO5TmnqEhX4S5qShhcGJaUvDIGn8%2FutvPzbU6a7xE5s1Gg2usTbtxjoMHFb1MCxR06fXv%2BL%2Byx%2F1o7M0*1656331586*96dd6a67620562b0&pageId=

    }
}
