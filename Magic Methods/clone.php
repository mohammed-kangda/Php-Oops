<!-- 
    
    Copy by value & Copy by reference.

    In object by default there is Copy by reference.

    To remove Copy by reference 'clone' keyword is used -> [Copy by value]

-->

<h3>Copy By Value -- Diff. memory allocation.</h3>
<?php 
    
    // Copy by value:

    // $a = 5;
    // $b = $a;   // $b = 5
    // $b = 10;   // $b = 10

    // echo $b;   // 10
    // echo $a;   // 5
    
?>

<h3>Copy By Reference -- Same memory allocation</h3>

<?php 
    
    // '&' means memory loction of both 'a' and 'b' are same and By default 
    // diff. memory allocation.

    // Copy By Reference:
    
    // $a = 5;
    // $b = &$a; // $b = 5
    // $b = 10;  // $b = 10 <-> $a = 10

    // echo $b;  // 10
    // echo $a;  // 10
    
?>

<h3>Example 1</h3>
<br>

<?php 
    
    class Student{

        public $name;
        public $course;

        public function __construct($n){
            $this->name = $n;
        }

    }

    $obj = new Student('Mohammed');
    
    $obj2 = clone $obj;  // $obj2 = 'Mohammed';

    $obj2->name = 'Codermisk'; // $obj2 = 'Codermisk';

    echo $obj->name;  // 'Mohammed' -> 'Codermisk' ['Without clone']
    echo $obj2->name; // 'Codermisk' -> 'Codermisk' ['Without clone']
    
?>