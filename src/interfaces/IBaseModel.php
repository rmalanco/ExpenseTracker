<?php

namespace ExpenseTracker\Interfaces;

interface IBaseModel
{
    public function fill(array $attributes);
    public function setAttribute($key, $value);
    public function getAttribute($key);
    public function getAttributes();
    public function validate();
    public function toArray();
}
