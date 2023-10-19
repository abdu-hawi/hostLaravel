<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // if (url('') == "http://127.0.0.1:8000") {
        //     Mail::to($this->data['email'])->send(new ViewProjectMail($this->data['details']));
        // } else {
        //     sendMail($this->data['email'], trans('site.project.Request details'), $this->data['details']);
        // }
        sendMail($this->data['email'], "Thank you for register", $this->data['first_name'] . ' ' . $this->data['last_name']);
    }
}
