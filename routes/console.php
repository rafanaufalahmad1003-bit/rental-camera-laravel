<?php
use Illuminate\Support\Facades\Artisan;
Artisan::command('about-project', function () { $this->comment('Rental Camera Laravel starter'); });
