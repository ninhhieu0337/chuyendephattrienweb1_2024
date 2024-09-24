<?php

declare(strict_types=1);

require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

class Demo {
    // Trường hợp 1: X là I, Y là A
    public function typeIReturnA(): A {
        echo "typeIReturnA<br>";
        return new A();
    }

    // Trường hợp 2: X là I, Y là B
    public function typeIReturnB(): B {
        echo "typeIReturnB<br>";
        return new B();
    }

    // Trường hợp 3: X là C, Y là A
    public function typeCReturnA(): A {
        echo "typeCReturnA<br>";
        return new A();
    }

    // Trường hợp 4: X là C, Y là B
    public function typeCReturnB(): B {
        echo "typeCReturnB<br>";
        return new B();
    }

    // Trường hợp 5: X là A, Y là C
    public function typeAReturnC(): C {
        echo "typeAReturnC<br>";
        return new C();
    }

    // Trường hợp 6: X là B, Y là C
    public function typeBReturnC(): C {
        echo "typeBReturnC<br>";
        return new C();
    }

    // Trường hợp 7: X là Null, Y là A
    public function typeNullReturnA(): ?A {
        echo "typeNullReturnA<br>";
        return new A();
    }

    // Trường hợp 8: X là Null, Y là B
    public function typeNullReturnB(): ?B {
        echo "typeNullReturnB<br>";
        return new B();
    }

    // Trường hợp 9: X là I, Y là C
    public function typeIReturnC(): C {
        echo "typeIReturnC<br>";
        return new C();
    }

    // Trường hợp 10: X là A, Y là A
    public function typeAReturnA(): A {
        echo "typeAReturnA<br>";
        return new A();
    }

    // Trường hợp 11: X là B, Y là A
    public function typeBReturnA(): A {
        echo "typeBReturnA<br>";
        return new A();
    }

    // Trường hợp 12: X là A, Y là B
    public function typeAReturnB(): B {
        echo "typeAReturnB<br>";
        return new B();
    }

    // Trường hợp 13: X là C, Y là C
    public function typeCReturnC(): C {
        echo "typeCReturnC<br>";
        return new C();
    }

    // Trường hợp 14: X là I, Y là Null
    public function typeIReturnNull(): ?I {
        echo "typeIReturnNull<br>";
        return null;
    }

    // Trường hợp 15: X là Null, Y là C
    public function typeNullReturnC(): ?C {
        echo "typeNullReturnC<br>";
        return new C();
    }

    // Trường hợp 16: X là C, Y là A (lặp lại)
    public function typeCReturnA2(): A {
        echo "typeCReturnA2<br>";
        return new A();
    }

    // Trường hợp 17: X là B, Y là B
    public function typeBReturnB(): B {
        echo "typeBReturnB<br>";
        return new B();
    }

    // Trường hợp 18: X là I, Y là I
    public function typeIReturnI(): I {
        echo "typeIReturnI<br>";
        return new class implements I {
            public function f() {
                // Hiện thực phương thức f() nếu cần
            }
        };
    }

    // Trường hợp 19: X là A, Y là Null
    public function typeAReturnNull(): ?A {
        echo "typeAReturnNull<br>";
        return null;
    }

    // Trường hợp 20: X là C, Y là Null
    public function typeCReturnNull(): ?C {
        echo "typeCReturnNull<br>";
        return null;
    }

    // Trường hợp 21: X là Null, Y là Null
    public function typeNullReturnNull(): ?I {
        echo "typeNullReturnNull<br>";
        return null;
    }

    // Trường hợp 22: X là B, Y là Null
    public function typeBReturnNull(): ?B {
        echo "typeBReturnNull<br>";
        return null;
    }

    // Trường hợp 23: X là I, Y là B
    public function typeIReturnB2(): B {
        echo "typeIReturnB2<br>";
        return new B();
    }

    // Trường hợp 24: X là A, Y là C (lặp lại)
    public function typeAReturnC2(): C {
        echo "typeAReturnC2<br>";
        return new C();
    }

    // Trường hợp 25: X là B, Y là A (lặp lại)
    public function typeBReturnA2(): A {
        echo "typeBReturnA2<br>";
        return new A();
    }
}

// Tạo đối tượng của lớp Demo
$demo = new Demo();

// Gọi các phương thức
$demo->typeIReturnA();
$demo->typeIReturnB();
$demo->typeCReturnA();
$demo->typeCReturnB();
$demo->typeAReturnC();
$demo->typeBReturnC();
$demo->typeNullReturnA();
$demo->typeNullReturnB();
$demo->typeIReturnC();
$demo->typeAReturnA();
$demo->typeBReturnA();
$demo->typeAReturnB();
$demo->typeCReturnC();
$demo->typeIReturnNull();
$demo->typeNullReturnC();
$demo->typeCReturnA2();
$demo->typeBReturnB();
$demo->typeIReturnI();
$demo->typeAReturnNull();
$demo->typeCReturnNull();
$demo->typeNullReturnNull();
$demo->typeBReturnNull();
$demo->typeIReturnB2();
$demo->typeAReturnC2();
$demo->typeBReturnA2();
