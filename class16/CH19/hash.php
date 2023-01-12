<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi eos, mollitia impedit deserunt distinctio provident enim voluptate ratione quas commodi quidem odio! Aliquid accusamus iusto aut nisi architecto excepturi?
</p>
<p>
    <pre>
    <code>
    md2           32 a9046c73e00331af68917d3804f70655                  
md4           32 866437cb7a794bce2b727acc0362ee27
md5           32 5d41402abc4b2a76b9719d911017c592
sha1          40 aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d
sha256        64 2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e730
sha384        96 59e1748777448c69de6b800d7a33bbfb9ff1b463e44354c3553
sha512       128 9b71d224bd62f3785d96d46ad3ea3d73319bfbc2890caadae2d
ripemd128     32 789d569f08ed7055e94b4289a4195012
ripemd160     40 108f07b8382412612c048d07d13f814118445acd
ripemd256     64 cc1d2594aece0a064b7aed75a57283d9490fd5705ed3d66bf9a
ripemd320     80 eb0cf45114c56a8421fbcb33430fa22e0cd607560a88bbe14ce
whirlpool    128 0a25f55d7308eca6b9567a7ed3bd1b46327f0f1ffdc804dd8bb
tiger128,3    32 a78862336f7ffd2c8a3874f89b1b74f2
tiger160,3    40 a78862336f7ffd2c8a3874f89b1b74f2f27bdbca
tiger192,3    48 a78862336f7ffd2c8a3874f89b1b74f2f27bdbca39660254
tiger128,4    32 1c2a939f230ee5e828f5d0eae5947135
tiger160,4    40 1c2a939f230ee5e828f5d0eae5947135741cd0ae
tiger192,4    48 1c2a939f230ee5e828f5d0eae5947135741cd0aefeeb2adc
snefru        64 7c5f22b1a92d9470efea37ec6ed00b2357a4ce3c41aa6e28e3b
gost          64 a7eb5d08ddf2363f1ea0317a803fcef81d33863c8b2f9f6d7d1
adler32        8 062c0215
crc32          8 3d653119
crc32b         8 3610a686
haval128,3    32 85c3e4fac0ba4d85519978fdc3d1d9be
haval160,3    40 0e53b29ad41cea507a343cdd8b62106864f6b3fe
haval192,3    48 bfaf81218bbb8ee51b600f5088c4b8601558ff56e2de1c4f
haval224,3    56 92d0e3354be5d525616f217660e0f860b5d472a9cb99d6766be
haval256,3    64 26718e4fb05595cb8703a672a8ae91eea071cac5e7426173d4c
haval128,4    32 fe10754e0b31d69d4ece9c7a46e044e5
haval160,4    40 b9afd44b015f8afce44e4e02d8b908ed857afbd1
haval192,4    48 ae73833a09e84691d0214f360ee5027396f12599e3618118
haval224,4    56 e1ad67dc7a5901496b15dab92c2715de4b120af2baf661ecd92
haval256,4    64 2d39577df3a6a63168826b2a10f07a65a676f5776a0772e0a87
haval128,5    32 d20e920d5be9d9d34855accb501d1987
haval160,5    40 dac5e2024bfea142e53d1422b90c9ee2c8187cc6
haval192,5    48 bbb99b1e989ec3174019b20792fd92dd67175c2ff6ce5965
haval224,5    56 aa6551d75e33a9c5cd4141e9a068b1fc7b6d847f85c3ab16295
haval256,5    64 348298791817d5088a6de6c1b6364756d404a50bd64e645035f
    </code>
    </pre>
</p>
<pre>
<?php
var_dump(hash_algos())
?>
</pre>
<?php
$message = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem animi eos, mollitia impedit deserunt distinctio provident enim voluptate ratione quas commodi quidem odio! Aliquid accusamus iusto aut nisi architecto excepturi?";
echo hash("md2",$message) . "<br>";
echo hash("md5",$message) . "<br>";
echo hash("sha1",$message) . "<br>";
?>