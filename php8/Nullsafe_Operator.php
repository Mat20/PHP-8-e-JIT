<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;


class TestCommand extends Command
{
    protected  $signature = 'teste';

    public function handle()
   {
        $data = User::first()?->created_at->format('d/m/Y');
        //$data = User::first()? User::first->created_at->format('d/m/Y') : null;

        $this->info("Data de criaçao do primeiro usuário: $data");
   }
}
