<?php
/**
 * Created by PhpStorm.
 * User: Niyaz
 * Date: 06.03.2018
 * Time: 20:58
 */
require 'libs/rb.php';

$b1 = 'Title: Introduction to Algorithms
Authors: Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest and Clifford Stein
Publisher: MIT Press
Year: 2009
Edition: Third edition
Note: NA';

$b2 = 'Title: Design Patterns: Elements of Reusable Object-Oriented Software
Authors: Erich Gamma, Ralph Johnson, John Vlissides, Richard Helm
Publisher: Addison-Wesley Professional
Year: 2003
Edition: First edition
Note: best seller';


$b3 = 'Title: The Mythical Man-month
Authors: Brooks,Jr., Frederick P.
Publisher: Addison-Wesley Longman Publishing Co., Inc.
Year: 1995
Edition: Second edition
Note: reference';

$av1 = 'Title: Null References: The Billion Dollar Mistake
Authors: Tony Hoare';
$av2 = 'Title: Information Entropy
Authors: Claude Shannon';

$p1 = 'Name: Sergey Afonso
Address: Via Margutta, 3
Phone Number: 30001
Lib. card ID: 1010
Type: Faculty
';
$p2 = 'Name: Nadia Teixeira
Address: Via Sacra, 13
Phone Number: 30002
Lib. card ID: 1011
Type: Student';
$p3 = 'Name: Elvira Espindola
Address: Via del Corso, 22
Phone Number: 30003
Lib. card ID: 1100
Type: Student';

public function tag( OODBBean $bean, $tagList = NULL )
{
    if ( is_null( $tagList ) ) {

        $tags = $bean->sharedTag;
        $foundTags = array();

        foreach ( $tags as $tag ) {
            $foundTags[] = $tag->title;
        }

        return $foundTags;
    }

    $this->associationManager->clearRelations( $bean, 'tag' );
    $this->addTags( $bean, $tagList );

    return $tagList;
}
R::setup(all);
?>