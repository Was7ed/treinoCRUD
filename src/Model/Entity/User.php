<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $sobrenome
 * @property string $email
 * @property string $login_name
 * @property string $pass
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'sobrenome' => true,
        'email' => true,
        'login_name' => true,
        'pass' => true
    ];

    protected function _setPass($value)
    {
        if (strlen($value)) { //Vê se algum valor foi realmente passado
            $hasher = new DefaultPasswordHasher();//Instancia a classe
            return $hasher->hash($value);//Usa o hash
        }
    }
}
