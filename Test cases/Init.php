<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 06.03.2018
 * Time: 20:58
 */
require 'libs/rb.php';

$d1 = 'Title: Introduction to Algorithms
Authors: Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest and Clifford Stein
Publisher: MIT Press
Year: 2009
Edition: Third edition
Note: NA
Price: 5000 rub.
keywords: Algorithms, Data Structures, Complexity, Computational Theory
';

$d2 = 'Title: Algorithms + Data Structures = Programs
Authors: Niklaus Wirth
Publisher: Prentice Hall PTR
Year: 1978
Edition: First edition
Note: NA
Price: 5000 rub.
keywords: Algorithms, Data Structures, Search Algorithms, Pascal
';


$d3 = 'Title: The Art of Computer Programming
Authors: Donald E. Knuth
Publisher: Addison Wesley Longman Publishing Co., Inc.
Year: 1997
Edition: Third edition
Note: NA
Price: 5000 rub.
keywords: Algorithms, Combinatorial Algorithms, Recursion';

$p1 = 'Name: Sergey Afonso
Address: Via Margutta, 3
Phone Number: 30001
Lib. card ID: 1010
Type: Faculty (Professor)';
$p2 = 'Name: Nadia Teixeira
Address: Via Sacra, 13
Phone Number: 30002
Lib. card ID: 1011
Type: Faculty (Professor)
';

$p3 = 'Name: Elvira Espindola
Address: Via del Corso, 22
Phone Number: 30003
Lib. card ID: 1100
Type: Faculty (Professor)
';
$s = 'Name: Andrey Velo
Address: Avenida Mazatlan 250
Phone Number: 30004
Lib. card ID: 1101
Type: Student';
$v = 'Name: Veronika Rama
Address: Stret Atocha, 27
Phone Number: 30005
Lib. card ID: 1110
Type: Visiting Professor';
$l1 = 'Name: Eugenia Rama
Privilege: Priv1';
$l2 = 'Name: Luie Ramos
Privilege: Priv2';
$l3 = 'Name: Ramon Valdez
Privilege: Priv3';

public function tag(OODBBean $bean, $tagList = NULL)
{
    if (is_null($tagList)) {

        $tags = $bean->sharedTag;
        $foundTags = array();

        foreach ($tags as $tag) {
            $foundTags[] = $tag->title;
        }

        return $foundTags;
    }

    $this->associationManager->clearRelations($bean, 'tag');
    $this->addTags($bean, $tagList);

    return $tagList;
}

R::setup(all);
?>