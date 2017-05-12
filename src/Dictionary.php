<?php

namespace G4\ValueObject;

use G4\ValueObject\Exception\InvalidDictionaryException;

class Dictionary
{

    /**
     * @var array
     */
    private $data;

    /**
     * Dictionary constructor.
     * @param array $data
     * @throws InvalidDictionaryException
     */
    public function __construct(array $data)
    {
        if (empty($data)) {
            throw new InvalidDictionaryException($data);
        }

        $this->data = $data;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        return $this->has($key)
            ? $this->data[$key]
            : null;
    }

    /**
     * @param $key
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->data);
    }

}