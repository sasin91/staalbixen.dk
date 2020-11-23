<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:action {name} {--contract=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new action class';

    /**
     * Fully qualified namespace to the contract
     *
     * @var string
     */
    protected $contract;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('contract')) {
            return __DIR__ . '/../stubs/action.contract.stub';
        }

        return __DIR__ . '/../stubs/action.stub';
    }

    protected function getContractStub()
    {
        return __DIR__ . '/../stubs/action-contract.stub';
    }

    protected function buildContract($name)
    {
        $stub = $this->files->get($this->getContractStub());

        return $this
            ->replaceNamespace($stub, $name)
            ->replaceClass($stub, $name);
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\\Actions';
    }


    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function buildClass($name)
    {
        $stub = parent::buildClass($name);

        return $this->option('contract')
            ? $this->replaceContract($stub)
            : $stub;
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function replaceContract(&$stub)
    {
        $replace = [
            'DummyFullContractClass' => $this->contract,
            'DummyContractClass' => class_basename($this->contract)
        ];

        return str_replace(
            array_keys($replace),
            array_values($replace),
            $stub
        );
    }

    protected function createContract()
    {
        $name = $this->qualifyContract(
            $this->option('contract')
        );

        $path = $this->getPath($name);

        $this->files->put($path, $this->buildContract($name));

        $this->contract = $name;
    }

    protected function qualifyContract($contract)
    {
        $contract = ltrim($contract, '\\/');

        $contract = str_replace('/', '\\', $contract);

        return $this->rootNamespace() . 'Contracts\\' . $contract;
    }

    /**
     * Execute the console command.
     *
     * @return bool|null
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        if ($this->option('contract')) {
            $this->createContract();
        }

        return parent::handle();
    }
}
