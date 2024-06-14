<?php
class Model_Post extends Orm\Model {
    protected static $properties = array(
        'id',
        'title',
        'category',
        'body',
        'tags',
        'created_date',
    );
}
