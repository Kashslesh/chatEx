<?php 
require './config/fonction.php';

?>
<div class="centreChat">
  <div class="rocket1">
  <i class="fas fa-rocket"></i>

</div>
<div class="divChat">
  <div class="content">
    <div class="chatleft">
      <img id="left" src="../img/Avatar - Text.png" alt="Avatar" />
      <div class="textZone">
        <p>MIGUEL CARDONA</p>
        <div class="colordiv">
          <p class="message">Message</p>
        </div>
      </div>
    </div>
    <div class="chatright">
      <img id="right" src="../img/Avatar - Text.png" alt="Avatar" />
      <div class="textZone">
        <p>MIGUEL CARDONA</p>
        <div class="colordiv">
          <p class="message">Message</p>
        </div>
      </div>
    </div>
    <div class="chatleft">
      <img id="left" src="../img/Avatar - Text.png" alt="Avatar" />
      <div class="textZone">
        <p class="nameDePro">MIGUEL CARDONA</p>
        <div class="colordiv">
        <p class="message">Message</p>
        </div>
      </div>
    </div>
    <div class="chatright">
      <img id="right" src="../img/Avatar - Text.png" alt="Avatar" />
      <div class="textZone">
        <p class="nameDePro">MIGUEL CARDONA</p>
        <div class="colordiv">
          <p class="message">Message</p>
        </div>
      </div>
    </div>
  </div>
  <div class="envMess">
    <form id="FormMessage" action="../views/chat.php" method="POST">
      <input
      type="text"
      placeholder="Ex. Salut!"
      name="textchat"
      id="envText"
      />
      <button class="btn2" type="submit" >Je chat</button>
    </form>
  </div>
</div>
<div class="rocket">
  <i class="fas fa-rocket"></i>
</div>