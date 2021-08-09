<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test")
 */
class Test 
{
   

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")   
     */
    protected $id;

    /** 
     * @ORM\Column(name="name")  
     */
    protected $name;

    /** 
     * @ORM\Column(name="text")  
     */
    protected $text;

    /** 
     * @ORM\Column(name="quantity")  
     */
    protected $quantity;

  
    // Возвращает ID данного поста.
    public function getId() 
    {
        return $this->id;
    }

    // Задает ID данного поста.
    public function setId($id) 
    {
        $this->id = $id;
    }

    // Возвращает заголовок.
    public function getName() 
    {
        return $this->name;
    }

    // Задает заголовок.
    public function setNAme($name) 
    {
        $this->title = $name;
    }

    // Возвращает статус.
    public function getText() 
    {
        return $this->text;
    }

    // Устанавливает статус.
    public function setText($text) 
    {
        $this->text = $text;
    }
    
    // Возвращает содержимое поста.
    public function getQuantity() 
    {
        return $this->quantity; 
    }
    
    // Задает содержимое поста.
    public function setQuantity($quantity) 
    {
        $this->quantity = $quantity;
    }
    
}