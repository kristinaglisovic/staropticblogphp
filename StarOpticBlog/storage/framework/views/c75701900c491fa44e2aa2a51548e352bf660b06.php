<p>Poruka:</p>
<p><?php echo e($data['message']); ?></p>

<div style="margin-top: 50px;">
    <p>Ime i prezime: <?php echo e($data['firstname']); ?> <?php echo e($data['lastname']); ?> </p>
    <?php if($data['phone']): ?>
    <p>Broj telefona: <?php echo e($data['phone']); ?> </p>
    <?php else: ?>
      <p>Korisnik nije ostavio broj telefona</p>
    <?php endif; ?>
    <p>Email: <?php echo e($data['email']); ?></p>
</div>
<?php /**PATH C:\xampp\htdocs\StarOpticBlog\resources\views/mail/mail.blade.php ENDPATH**/ ?>