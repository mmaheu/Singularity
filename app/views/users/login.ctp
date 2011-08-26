<br/>
    <br/>
    <br/>
<div id="post-single" >

    <ul class="entry">
    <li id="entry"
            <?php
            echo $this->Session->flash('auth');
            ?>
            </br>

            <?php
            echo $this->Form->create('User', array('action' => 'login'));
            ?>
            </br>
            <?php
                  echo $this->Form->inputs(array(
                'legend' => __('Login', true),
                'username',
                'password'
            ));
            echo $this->Form->end('Login');
            ?>
    </li>
     </ul>
</div>
