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
';

$d2 = 'Title: Design Patterns: Elements of Reusable Object-Oriented Software
Authors: Erich Gamma, Ralph Johnson, John Vlissides, Richard Helm
Publisher: Addison-Wesley Professional
Year: 2003
Edition: First edition
Note: best seller
Price: 1700 rub.';


$d3 = 'Title: Null References: The Billion Dollar Mistake
Authors: Tony Hoare
Price: 700 rub.';

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

public
function tag(OODBBean $bean, $tagList = NULL)
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