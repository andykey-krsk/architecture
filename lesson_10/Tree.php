<?php

class BinaryNode
{
    public $value;
    public $left = null;
    public $right = null;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert(int $int)
    {
        $node = new BinaryNode($int);

        if ($this->root === null) {
            $this->root = $node;
        } else {
            $this->insertNode($node, $this->root);
        }
    }

    private function insertNode(BinaryNode $node, &$rootSubtree)
    {
        if ($rootSubtree === null) {
            $rootSubtree = $node;
        } elseif ($rootSubtree->value < $node->value) {
            $this->insertNode($node, $rootSubtree->right);
        } else {
            $this->insertNode($node, $rootSubtree->left);
        }
    }

    public function delete(int $int)
    {
        if ($this->root === null) {
            throw new Exception("Дерево пустое");
        }

        $node = &$this->findNode($int, $this->root);

        if ($node) {
            $this->deleteNode($node);
        } else {
            echo "Число не найдено";
        }
    }

    private function &findNode(int $int, ?BinaryNode &$rootSubtree): ?BinaryNode
    {
        if ($rootSubtree === null || $rootSubtree->value == $int) {
            return $rootSubtree;
        }

        if ($rootSubtree->value > $int) {
            return $this->findNode($int, $rootSubtree->left);
        }
        return $this->findNode($int, $rootSubtree->right);

    }

    //удаление
    private function deleteNode(BinaryNode &$node)
    {
        if (is_null($node->right) && is_null($node->left)) {
            $node = null;
        } elseif (is_null($node->left)) {
            $node = $node->right;
        } elseif (is_null($node->right)) {
            $node = $node->left;
        } else {
            $min = $this->min($node->right);
            $this->delete($min->value);
            $node->value = $min->value;
        }
    }

    public function max(BinaryNode $node)
    {
        if (is_null($node->right)){
            //echo "Максимальный элемент {$node->value}" . PHP_EOL;
            return $node;
        } else {
            return $this->max($node->right);
        }
    }

    public function min(BinaryNode $node)
    {
        if (is_null($node->left)){
            //echo "Минимальный элемент {$node->value}" . PHP_EOL;
            return $node;
        } else {
            return $this->min($node->left);
        }
    }

    //Центрированный обход (LNR)
    public function inOrder($node)
    {
        if ($node != null) {
            $this->inOrder($node->left);
            echo $node->value;
            $this->inOrder($node->right);
        }
    }

    //Прямой обход (NLR)
    public function preOrder($node)
    {
        if ($node != null) {
            echo $node->value;
            $this->preOrder($node->left);
            $this->preOrder($node->right);
        }
    }

    //Обратный обход (LRN)
    public function postOrder($node)
    {
        if ($node != null) {
            $this->postOrder($node->left);
            $this->postOrder($node->right);
            echo $node->value;
        }
    }
}

function compare(BinaryTree $tree1, $tree2)
{
    if (!($tree1 <=> $tree2)){
        echo "Деревья одинаковые ".PHP_EOL;
        //return true;
    } else{
        echo "Деревья разные ".PHP_EOL;
        //return false;
    }

}

//Создаем два дерева
$tree1 = new BinaryTree();
$tree2 = new BinaryTree();

//Добавляем элементы в первое дерево
$tree1->insert(5);
$tree1->insert(3);
$tree1->insert(4);
$tree1->insert(2);
$tree1->insert(1);
$tree1->insert(0);
$tree1->insert(7);
$tree1->insert(6);
$tree1->insert(8);

//Добавляем элементы во второе дерево
$tree2->insert(5);
$tree2->insert(3);
$tree2->insert(4);
$tree2->insert(2);
$tree2->insert(1);
$tree2->insert(0);
$tree2->insert(7);
$tree2->insert(6);
$tree2->insert(8);

//Сравниваем деревья
compare($tree1,$tree2);

//Удаляем один элемент из первого дерева
$tree1->delete(5);

//И опять сравниваем
compare($tree1,$tree2);

//Центрированный обход (LNR)
$tree1->inOrder($tree1->root);
echo PHP_EOL;

//Прямой обход (NLR)
$tree1->preOrder($tree1->root);
echo PHP_EOL;

//Обратный обход (LRN)
$tree1->postOrder($tree1->root);
echo PHP_EOL;

print_r($tree1);