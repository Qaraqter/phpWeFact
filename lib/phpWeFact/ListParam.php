<?php
namespace phpWeFact;

class ListParam extends API
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $offset;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var string
     */
    protected $sort;

    /**
     * @var string
     */
    protected $order;

    /**
     * @var string
     */
    protected $searchat;

    /**
     * @var string
     */
    protected $searchfor;

    /**
     * @var int
     */
    protected $group;

    /**
     * Constructs the ListParam class
     */
    public function __construct()
    {
    }

    /**
     * Gets the value of offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }
    
    /**
     * Sets the value of offset.
     *
     * @param int $offset the offset 
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Gets the value of limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
    
    /**
     * Sets the value of limit.
     *
     * @param int $limit the limit 
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Gets the value of sort.
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }
    
    /**
     * Sets the value of sort.
     *
     * @param string $sort the sort 
     *
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Gets the value of order.
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
    
    /**
     * Sets the value of order.
     *
     * @param string $order the order 
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Gets the value of searchat.
     *
     * @return string
     */
    public function getSearchat()
    {
        return $this->searchat;
    }
    
    /**
     * Sets the value of searchat.
     *
     * @param string $searchat the searchat 
     *
     * @return self
     */
    public function setSearchat($searchat)
    {
        $this->searchat = $searchat;

        return $this;
    }

    /**
     * Gets the value of searchfor.
     *
     * @return string
     */
    public function getSearchfor()
    {
        return $this->searchfor;
    }
    
    /**
     * Sets the value of searchfor.
     *
     * @param string $searchfor the searchfor 
     *
     * @return self
     */
    public function setSearchfor($searchfor)
    {
        $this->searchfor = $searchfor;

        return $this;
    }

    /**
     * Gets the value of group.
     *
     * @return int
     */
    public function getGroup()
    {
        return $this->group;
    }
    
    /**
     * Sets the value of group.
     *
     * @param int $group the group 
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Gets the value of status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Sets the value of status.
     *
     * @param string $status the status 
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
