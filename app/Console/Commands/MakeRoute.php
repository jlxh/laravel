<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeRoute extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:route 
                            {name : the name of the route file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new route file';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Route';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/route.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Routes';
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $replace = $this->argument('name');
        $stub = str_replace('dummy', $replace, $stub);
        $stub = str_replace('Dummy', ucwords($replace), $stub);

        return $this;
    }
}
