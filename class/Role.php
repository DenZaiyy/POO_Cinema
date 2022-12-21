<?php 

class Role 
{
    private string $_role;
    private array $_castings;

    public function __construct($role)
    {
        $this->_role = $role;
        $this->_castings = [];
    }

    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function __toString()
    {
        return $this->getRole();
    }
}