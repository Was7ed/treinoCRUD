<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-offset-2 large-8 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Fazer Login') ?></legend>
        <?php
            echo $this->Form->input('login_name');
            echo $this->Form->input('pass', array('type' => 'password'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
    <a href="/users/add"><button id="reg-button" href="/users/add" class="right">REGISTRAR</button></a>
</div>


<style scoped>
    .content{
        margin-top:15%;
        padding: 20px;
        border-radius: 5px;
        background-color:#eaeaea;
        box-shadow: 5px 5px 5px grey;
    }

    .content legend{
        background-color: #eaeaea;
    }

    form button{
        background-color:#528e57;
        border-radius: 0 10px 10px 0;    
    }

    form button:hover{
        background-color:#0eaf20 !important;
    }

    #reg-button{
        background-color:#2943a0; 
        border-radius: 10px 0 0 10px;  
    }

    #reg-button:hover{
        background-color:#4357f2; 
    }
</style>