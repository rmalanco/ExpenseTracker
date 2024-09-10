<?php

// BaseModel.php

namespace ExpenseTracker\Core;

use ExpenseTracker\Interfaces\IBaseModel;

class BaseModel implements IBaseModel
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    // Rellena el modelo con un conjunto de atributos
    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->setAttribute($key, $value);
        }
    }

    // Establece un atributo en el modelo
    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    // Obtiene un atributo del modelo
    public function getAttribute($key)
    {
        return $this->attributes[$key] ?? null;
    }

    // Devuelve todos los atributos del modelo
    public function getAttributes()
    {
        return $this->attributes;
    }

    // Método para validar los datos del modelo
    public function validate()
    {
        // Implementar lógica de validación
        return true;
    }

    // Método para convertir el modelo a un array
    public function toArray()
    {
        return $this->attributes;
    }
}
