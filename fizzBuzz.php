<?php

for ($i = 1; $i <= 5; $i++) {
    if ($i % (3 * 5) == 0)
        print("FizzBuzz" . "<br>");
    else if ($i % 5 == 0)
        print("Buzz" . "<br>");
    else if ($i % 3 == 0)
        print("Fizz". "<br>");
    else
        print($i. "<br>");
}
/*
 Ans
 1
2
Fizz
4
Buzz
 */
?>



