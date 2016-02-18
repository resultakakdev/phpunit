--TEST--
phpunit --testdox-html php://stdout BankAccountTest ../_files/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--testdox-html';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__) . '/../_files/BankAccountTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Test Documentation</title>
        <style>
            body {
                text-rendering: optimizeLegibility;
                font-variant-ligatures: common-ligatures;
                font-kerning: normal;
                margin-left: 1vw;
            }

            body > ul {
                max-width: 60vw;
            }

            body > ul > li {
                font-family: Source Serif Pro, PT Sans, Trebuchet MS, Helvetica, Arial;
                font-weight: 400;
                font-size: 1vw;
                line-height: 1.5vw;
            }

            h2 {
                font-family: Tahoma, Helvetica, Arial;
                font-size: 1.5vw;
            }

            ul {
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>

        <h2 id="BankAccountTest">BankAccount</h2>
        <ul>
...                                                                 3 / 3 (100%)            <li>Balance is initially zero</li>
            <li>Balance cannot become negative</li>
        </ul>
    </body>
</html>

Time: %s, Memory: %sMb

OK (3 tests, 3 assertions)
