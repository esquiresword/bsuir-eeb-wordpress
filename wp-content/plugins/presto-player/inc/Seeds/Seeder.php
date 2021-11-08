<?php

namespace PrestoPlayer\Seeds;

class Seeder
{
    protected $seeders;

    public function __construct(PresetSeeder $presetSeeder)
    {
        $this->seeders[] = $presetSeeder;
    }

    public function register()
    {
        add_action('admin_init', [$this, 'seed']);
    }

    public function seed()
    {
        foreach ($this->seeders as $seeder) {
            $seeder->run();
        }
    }
}
