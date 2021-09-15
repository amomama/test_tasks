<?php

final class Rectangle
{
    public int $a;

    public int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}

final class Triangle
{
    public int $a;

    public int $b;

    public int $c;

    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
}

final class Circle
{
    public int $r;

    public function __construct(int $r)
    {
        $this->r = $r;
    }
}

final class AreaCalculator
{
    public function calculate($shapes): float
    {
        $area = [];

        foreach ($shapes as $shape) {
            if (is_a($shape, Rectangle::class)) {
                $area[] = $shape->a * $shape->b;
            }

            if (is_a($shape, Triangle::class)) {
                $p = ($shape->a + $shape->b + $shape->c)/2;

                $area[] = sqrt($p * ($p - $shape->a) * ($p - $shape->b) * ($p - $shape->c));
            }

            if (is_a($shape, Circle::class)) {
                $area[] = pi() * pow($shape->r, 2);
            }
        }

        return array_sum($area);
    }
}



$shapes = [
    new Rectangle(2, 3),
    new Triangle(2, 3, 4),
    new Circle(2),
];

$area = (new AreaCalculator)->calculate($shapes);

/**
 * Необходимо изменить весь код таким образом, что при добавлении новой фигуры функция area и код уже используемых
 * классов фигур не изенялись
 * Классы фигур можно дополнять кодом но нельзя удалять существующий код
 */