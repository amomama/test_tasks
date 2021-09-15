<?php

class AWSStorage
{
    public function store($file)
    {
        /**
         * Реализация этого метода не важна
         */
    }
}

class MinioStorage
{
    public function store($file)
    {
        /**
         * Реализация этого метода не важна
         */
    }
}

class LocalStorage
{
    public function store($file)
    {
        /**
         * Реализация этого метода не важна
         */
    }
}

class FileSystem
{
    private $storage;

    public function __construct(AWSStorage $storage)
    {
        $this->storage = $storage;
    }

    public function saveFile($file): void
    {
        $this->storage->store($file);
    }
}

/**
 * Реализация этого класса не важна
 */
class SomeFile {}

/**
 * Следующий код менять не нужно
 */
$storage = new FileSystem(new AWSStorage);
$storage->saveFile(new SomeFile);

/**
 * Необходимо предоставить классу FileSystem возможность принимать любую из реализаций *Storage
 */