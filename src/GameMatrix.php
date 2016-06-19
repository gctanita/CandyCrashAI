<?php

/**
 * Created by PhpStorm.
 * User: Tanita
 * Date: 15-Jun-16
 * Time: 22:50
 */
class GameMatrix
{
    private $matrix;
    private $rows;
    private $columns;
    private $numberOfTypesOfElements;

    function __construct($numberOfRows, $numberOfColumns, $numberOfTypesOfElements)
    {
        $this->rows = $numberOfRows;
        $this->columns = $numberOfColumns;
        $this->numberOfTypesOfElements = $numberOfTypesOfElements;

        $this->initMatrix();
    }

    private function initMatrix()
    {
        for ($row = 0; $row < $this->rows; $row++) {
            for ($column = 0; $column < $this->columns; $column++) {
                $this->matrix[$row][$column] = mt_rand(1, $this->numberOfTypesOfElements);
            }
            echo "\n\t Call init function for row $row";
            $this->eliminateThreeInARow($row);
            $this->eliminateThreeInAColumn();
        }
    }

    private function eliminateThreeInARow($rowNumber)
    {
        for ($i = 0; $i < $this->columns - 2; $i++) {
//            echo
//                "\n$i => \t "
//                . $this->matrix[$rowNumber][$i] . "\t "
//                . $this->matrix[$rowNumber][$i + 1] . "\t "
//                . $this->matrix[$rowNumber][$i + 2];

            while (
                ($this->matrix[$rowNumber][$i] == $this->matrix[$rowNumber][$i + 1])
                && ($this->matrix[$rowNumber][$i] == $this->matrix[$rowNumber][$i + 2])
            ) {
                $this->matrix[$rowNumber][$i + 1] = mt_rand(1, $this->numberOfTypesOfElements);
//                echo
//                    "\n$i R=> \t "
//                    . $this->matrix[$rowNumber][$i] . "\t "
//                    . $this->matrix[$rowNumber][$i + 1] . "\t "
//                    . $this->matrix[$rowNumber][$i + 2];
            }

        }
    }

    private function eliminateThreeInAColumn()
    {
        for ($row = 0; $row < $this->rows - 2; $row++) {
            do {
                $flag = false;

                for ($column = 0; $column < $this->columns; $column++) {
                    echo
                        "\n$column => flag  $flag \t "
                        . $this->matrix[$row][$column] . "\t "
                        . $this->matrix[$row + 1][$column] . "\t "
                        . $this->matrix[$row + 2][$column];
                }
            } while ($flag == true);
        }
    }


    public function displayMatrix()
    {
        echo "\nThe matrix is: \n";
        for ($row = 0; $row < $this->rows; $row++) {
            for ($column = 0; $column < $this->columns; $column++) {
                echo "\t " . $this->matrix[$row][$column];
            }
            echo "\n";
        }
    }

}