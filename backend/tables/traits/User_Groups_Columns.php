<?php

namespace Backend\Tables\Traits;

trait User_Groups_Columns
{
    
    /**
     * COLUMNS
     * Interfacing with the restful return can be done using objects which allow your editor to smartly type fields.
     * The referenced return &$return from any Rest::Get method can be directly passed back into its calling classes 
     *  constructor. One might use these fields below with the following ::
     *
     *    public User_Groups $carbon_user_groups;
     *
     * The definition above can be defined with the following ::
     *
     *    $carbon_user_groups = new User_Groups($return);
     *
     * @note this method is unnecessary and should be avoided if not needed for clarity of clean code. 
    **/
    public ?string $group_id;

    public ?string $user_id;

}

