<?php
class Category
{
    private $name = 'nom';
    private $description = 'description';
    private $order = 'order';

    public function __construct($name = '', $description = '', $order = 0)
    {
        $this->name = $name;
        $this->description = $description;
        $this->order = $order;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed|string $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int|mixed $order
     */
    public function setOrder($order): void
    {
        $this->order = $order;
    }

    /** add object to array
     * @param array $aCategory
     */
    public function addToList(&$aCategory)
    {
        array_push($aCategory, $this);
    }

    /** sort the array in field "order"
     * @param array $aCategory
     */
    public function sortToList(&$aCategory)
    {
        $columns = array_column($aCategory, 'order');
        array_multisort($columns, SORT_ASC, $aCategory);
    }

    /** Delete Category
     * @param $aCategory
     * @param $index
     */
    public function deleteToListByIndex(&$aCategory, $index)

    {
        unset($aCategory[$index]);
    }
    /**
     * @param $tabCategories
     */
    public function addNewCategory(&$aCategory)
    {
        array_push($aCategory, $this);
    }
}
