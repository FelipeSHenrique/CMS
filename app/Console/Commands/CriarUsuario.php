<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CriarUsuario extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:cria-usuario';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Cadastro de usuário");
        $name = $this->ask("Informe nome de usuário: ");
        $email = $this->ask("Informe email do usuario: ");
        $password = $this->secret("Informe a senha de usuário: ");

        $user = new User();

        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);

        $user->save();
    }
}
