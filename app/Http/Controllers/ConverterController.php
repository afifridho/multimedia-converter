<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ConverterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function videoconverter(Request $request)
    {
        $this->validate($request, [
            'video' => 'required|mimes:mp4,avi,asf,mov,qt,avchd,flv,swf,mpg,mpeg,mpeg-4,wmv,divx,3gp|max:20480',
        ]);
        $videotmp = time();
        $video = $request->file('video');
        $videoinput = $videotmp.'.'.$video->getClientOriginalExtension();
        $destinationPath = public_path('/videos');
        $video->move($destinationPath, $videoinput);
        $videopath = $destinationPath.'/'.$videoinput;
        $scriptpath = public_path('/script').'/videoconverter.py';

        $process = new Process('python '.$scriptpath.' '.$videopath.' '.$request->videoformat.' '.$request->audioformat.' '.$request->samplerate.' '.$request->channel.' '.$request->videocodec.' '.$request->videowidth.' '.$request->videoheight.' '.$request->fps);
        $process->run();

        File::delete($videopath);
        return response()->download($destinationPath.'/'.$videotmp.'.'.$request->videoformat);

    }

    public function audioconverter(Request $request)
    {
        $audiotmp = time();
        $audio = $request->file('audio');
        $audioinput = $audiotmp.'.'.$audio->getClientOriginalExtension();
        $destinationPath = public_path('/audios');
        $audio->move($destinationPath, $audioinput);
        $audiopath = $destinationPath.'/'.$audioinput;

        $process = new Process('ffmpeg -i '.$audiopath.' -b:v '.$request->bitrate.' -ac '.$request->channel.' -ar '.$request->samplerate.' '.$destinationPath.'/'.$audiotmp.'.'.$request->audioformat);
        $process->run();

        File::delete($audiopath);
        return response()->download($destinationPath.'/'.$audiotmp.'.'.$request->audioformat);

    }

    public function imageconverter(Request $request)
    {
        $imagetmp = time();
        $image = $request->file('image');
        $imageinput = $imagetmp.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $imageinput);
        $imagepath = $destinationPath.'/'.$imageinput;
        $scriptpath = public_path('/script').'/imageconverter.py';

        $process = new Process('python '.$scriptpath.' '.$imagepath.' '.$destinationPath.'/'.$imagetmp.'.'.$request->imageformat.' '.$request->width.' '.$request->height.' '.$request->mode);
        $process->run();

        File::delete($imagepath);
        return response()->download($destinationPath.'/'.$imagetmp.'.'.$request->imageformat);

    }

}
