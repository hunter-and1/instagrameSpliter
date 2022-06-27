# -*- coding: utf-8 -*- 
import json
from moviepy.editor import *
from proglog import TqdmProgressBarLogger

data = {}

def progress_init(parts):
    for i in range(parts):
        data['part_' + str(i+1)+'_t'] = 0
        data['part_' + str(i+1)+'_chunk'] = 0
    data['part_' + str(i+1)+'_t'] = 0
    data['part_' + str(i+1)+'_chunk'] = 0
    with open('data.json', 'w', encoding='utf-8') as f:
        json.dump(data, f, ensure_ascii=False, indent=4)

def update_progress_part(part,type,value):
    data['part_' + str(part)+'_'+type] = value
    with open('data.json', 'w', encoding='utf-8') as f:
        json.dump(data, f, ensure_ascii=False, indent=4)

class MyBarLogger(TqdmProgressBarLogger):
    def setPart(self, part):
        self.part = part

    def bars_callback(self, bar, attr, value,old_value=None):
        # Every time the logger progress is updated, this function is called        
        percentage = (value / self.bars[bar]['total']) * 100
        update_progress_part(self.part,bar,percentage)

if __name__ == '__main__':
    print("Run Script!")

    required_video_file = "E:\\Works\\instagrameSpliter\\py\\video.mp4"
    export_path = "E:\\Works\\instagrameSpliter\\py\\"

    clip = VideoFileClip(required_video_file)

    time_spliter = 60
    from_time = 20
    duration = clip.duration
    number_spliter = int((duration - from_time)/time_spliter)
    print("duration : ",duration)
    print("number_spliter : ",number_spliter)

    progress_init(number_spliter)
    my_logger = MyBarLogger()

    start_at = 0 
    end_at = 0 
    for i in range(number_spliter):
        my_logger.setPart(i+1)
        end_at = ( (i+1) * time_spliter ) + from_time
        start_at = ( end_at - time_spliter ) ;
        print(start_at, end_at)
        clip1 = clip.subclip(start_at, end_at)
        clip1.write_videofile(export_path+"clip_"+str(i)+".mp4",logger=my_logger,threads=1)

    if(end_at < duration):
        my_logger.setPart(i+1)
        print(end_at, duration)
        clip1 = clip.subclip(end_at, duration)
        clip1.write_videofile(export_path+"clip_"+str(i+1)+".mp4",logger=my_logger,threads=1)


