<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benchmark.proto

namespace GPBMetadata;

class Benchmark
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aef1e0a0f62656e63686d61726b2e70726f746f120962656e63686d6172" .
            "6b221a0a0a4d617052657175657374120c0a046e616d6518012001280922" .
            "7d0a0b4d6170526573706f6e7365121d0a1564657374696e6174696f6e5f" .
            "61646472657373657318012003280912180a106f726967696e5f61646472" .
            "6573736573180220032809120e0a0673746174757318042001280912250a" .
            "08656c656d656e747318052003280b32132e62656e63686d61726b2e456c" .
            "656d656e747322270a0844697374616e6365120c0a047465787418012001" .
            "2809120d0a0576616c756518022001280d22270a084475726174696f6e12" .
            "0c0a0474657874180120012809120d0a0576616c756518022001280d2268" .
            "0a08456c656d656e747312250a0864697374616e636518012001280b3213" .
            "2e62656e63686d61726b2e44697374616e636512250a086475726174696f" .
            "6e18022001280b32132e62656e63686d61726b2e4475726174696f6e120e" .
            "0a0673746174757318032001280922210a1153747265616d506f73745265" .
            "7175657374120c0a046e616d6518012001280922440a1253747265616d50" .
            "6f7374526573706f6e7365120f0a076d657373616765180120012809121d" .
            "0a046461746118022003280b320f2e62656e63686d61726b2e4461746122" .
            "630a0a456e676167656d656e74120c0a046c696b6518012001280d120d0a" .
            "057265706c7918022001280d120d0a05736861726518032001280d12140a" .
            "0c70726f66696c655f7669657718042001280d12130a0b6d656469615f63" .
            "6c69636b18052001280d224a0a09416e616c797469637312120a0a696d70" .
            "72657373696f6e18012001280d12290a0a656e676167656d656e74180220" .
            "01280b32152e62656e63686d61726b2e456e676167656d656e74220b0a09" .
            "4d61736b5f68746d6c22ac080a0a4c6173745f7265706c79120e0a06706f" .
            "7374696418012001280d120e0a06617661746172180220012809120f0a07" .
            "636f6e74656e7418032001280912180a10636f6e74656e745f6f72696769" .
            "6e616c180420012809120f0a076372656174656418052001280912170a0f" .
            "637265617465645f646973706c617918062001280912100a08757365726e" .
            "616d6518072001280912100a0866756c6c6e616d6518082001280912260a" .
            "087469746c6575726c18092001280b32142e676f6f676c652e70726f746f" .
            "6275662e416e7912230a057469746c65180a2001280b32142e676f6f676c" .
            "652e70726f746f6275662e416e7912100a086f6666696369616c180b2001" .
            "280d120d0a05697370726f180c2001280d12100a08697370696e6e656418" .
            "0d2001280d12100a087472656e64696e67180e2001280d120f0a07726570" .
            "6c696573180f20012809120d0a056c696b657318102001280d12100a0864" .
            "69736c696b657318112001280d12100a087265706f737465641812200128" .
            "0d122a0a0c7265706f7374656466726f6d18132001280b32142e676f6f67" .
            "6c652e70726f746f6275662e416e79120d0a056c696b656418142001280d" .
            "120e0a066c696b657273181520012809120d0a0573617665641816200128" .
            "0d12240a06696d6167657318172003280b32142e676f6f676c652e70726f" .
            "746f6275662e416e7912280a0a6174746163686d656e7418182003280b32" .
            "142e676f6f676c652e70726f746f6275662e416e7912150a0d706172656e" .
            "745f706f7374696418192001280d12100a086469736c696b6564181a2001" .
            "280d120e0a06666f6c6c6f77181b2001280d12170a0f6e65777366656564" .
            "5f736f75726365181c2001280912160a0e6e657773666565645f6c616265" .
            "6c181d2001280912140a0c6e657773666565645f696d67181e2001280912" .
            "290a0b6c696e6b70726576696577181f2001280b32142e676f6f676c652e" .
            "70726f746f6275662e416e7912280a0a7472616465736861726518202001" .
            "280b32142e676f6f676c652e70726f746f6275662e416e7912130a0b746f" .
            "74616c5f7368617265182120012809122a0a0c7461726765745f70726963" .
            "6518222003280b32142e676f6f676c652e70726f746f6275662e416e7912" .
            "250a07636f756e74727918232001280b32142e676f6f676c652e70726f74" .
            "6f6275662e416e79122d0a0f6c6173745f7265706c795f64617465182420" .
            "01280b32142e676f6f676c652e70726f746f6275662e416e79120e0a0669" .
            "736e65777318252001280d12100a0869737265706f727418262001280d12" .
            "240a06746f7069637318272003280b32142e676f6f676c652e70726f746f" .
            "6275662e416e7912280a0a6c6173745f7265706c7918282001280b32142e" .
            "676f6f676c652e70726f746f6275662e416e7912270a096d61736b5f6874" .
            "6d6c18292001280b32142e62656e63686d61726b2e4d61736b5f68746d6c" .
            "22490a0441747472120d0a05636c61737318012001280912140a0c646174" .
            "615f636f6d70616e79180220012809120c0a046872656618032001280912" .
            "0e0a0674617267657418042001280922400a044b62746d120b0a03746167" .
            "180120012809121d0a046174747218022001280b320f2e62656e63686d61" .
            "726b2e41747472120c0a0474657874180320012809224a0a054174747231" .
            "120d0a05636c61737318012001280912140a0c646174615f636f6d70616e" .
            "79180220012809120c0a0468726566180320012809120e0a067461726765" .
            "7418042001280922410a04516d7168120b0a03746167180120012809121e" .
            "0a046174747218022001280b32102e62656e63686d61726b2e4174747231" .
            "120c0a0474657874180320012809224a0a054174747232120d0a05636c61" .
            "737318012001280912140a0c646174615f636f6d70616e79180220012809" .
            "120c0a0468726566180320012809120e0a06746172676574180420012809" .
            "22410a04446f626a120b0a03746167180120012809121e0a046174747218" .
            "022001280b32102e62656e63686d61726b2e4174747232120c0a04746578" .
            "74180320012809224a0a054174747233120d0a05636c6173731801200128" .
            "0912140a0c646174615f636f6d70616e79180220012809120c0a04687265" .
            "66180320012809120e0a0674617267657418042001280922410a04466c74" .
            "74120b0a03746167180120012809121e0a046174747218022001280b3210" .
            "2e62656e63686d61726b2e4174747233120c0a0474657874180320012809" .
            "224a0a054174747234120d0a05636c61737318012001280912140a0c6461" .
            "74615f636f6d70616e79180220012809120c0a0468726566180320012809" .
            "120e0a0674617267657418042001280922410a044f6b6867120b0a037461" .
            "67180120012809121e0a046174747218022001280b32102e62656e63686d" .
            "61726b2e4174747234120c0a047465787418032001280922a7010a0a4d61" .
            "736b5f68746d6c31121d0a046b42746d18012001280b320f2e62656e6368" .
            "6d61726b2e4b62746d121d0a04516d516818022001280b320f2e62656e63" .
            "686d61726b2e516d7168121d0a04444f426a18032001280b320f2e62656e" .
            "63686d61726b2e446f626a121d0a04466c545418042001280b320f2e6265" .
            "6e63686d61726b2e466c7474121d0a046f6b484718052001280b320f2e62" .
            "656e63686d61726b2e4f6b6867229a090a0444617461120e0a06706f7374" .
            "696418012001280d12100a087469746c6575726c180220012809120d0a05" .
            "7469746c65180320012809120f0a07636f6e74656e741804200128091218" .
            "0a10636f6e74656e745f6f726967696e616c180520012809120f0a076372" .
            "656174656418062001280912170a0f637265617465645f646973706c6179" .
            "180720012809120f0a0775706461746564180820012809120e0a06757365" .
            "72696418092001280d12110a0969735f617574686f72180a2001280d1210" .
            "0a08757365726e616d65180b2001280912100a0866756c6c6e616d65180c" .
            "20012809120e0a06617661746172180d2001280912100a086f6666696369" .
            "616c180e2001280d12110a09757365725f70726976180f2001280d120d0a" .
            "05697370726f18102001280d12100a08697370696e6e656418112001280d" .
            "12100a087472656e64696e6718122001280d120f0a077265706c69657318" .
            "1320012809120f0a076e6f7265706c7918142001280d120d0a056c696b65" .
            "7318152001280d12100a086469736c696b657318162001280d12100a0872" .
            "65706f7374656418172001280d122a0a0c7265706f7374656466726f6d18" .
            "182001280b32142e676f6f676c652e70726f746f6275662e416e79120d0a" .
            "056c696b656418192001280d120e0a066c696b657273181a20012809120d" .
            "0a057361766564181b2001280d120e0a06696d61676573181c2003280912" .
            "250a07706f6c6c696e67181d2003280b32142e676f6f676c652e70726f74" .
            "6f6275662e416e7912280a0a6174746163686d656e74181e2003280b3214" .
            "2e676f6f676c652e70726f746f6275662e416e7912150a0d706172656e74" .
            "5f706f73746964181f2001280d12100a086469736c696b65641820200128" .
            "0d120e0a06666f6c6c6f7718212001280d12250a077265706f7274731822" .
            "2003280b32142e676f6f676c652e70726f746f6275662e416e7912170a0f" .
            "6e657773666565645f736f7572636518232001280912160a0e6e65777366" .
            "6565645f6c6162656c18242001280912140a0c6e657773666565645f696d" .
            "6718252001280912290a0b6c696e6b7072657669657718262001280b3214" .
            "2e676f6f676c652e70726f746f6275662e416e7912280a0a747261646573" .
            "6861726518272001280b32142e676f6f676c652e70726f746f6275662e41" .
            "6e7912130a0b746f74616c5f7368617265182820012809122a0a0c746172" .
            "6765745f707269636518292003280b32142e676f6f676c652e70726f746f" .
            "6275662e416e7912270a09616e616c7974696373182a2001280b32142e62" .
            "656e63686d61726b2e416e616c797469637312250a07636f756e74727918" .
            "2b2001280b32142e676f6f676c652e70726f746f6275662e416e7912170a" .
            "0f6c6173745f7265706c795f64617465182c2001280d120e0a0669736e65" .
            "7773182d2001280d12100a0869737265706f7274182e2001280d120e0a06" .
            "746f70696373182f20032809120f0a076973636861727418302001280d12" .
            "290a0a6c6173745f7265706c7918312001280b32152e62656e63686d6172" .
            "6b2e4c6173745f7265706c7912280a096d61736b5f68746d6c1832200128" .
            "0b32152e62656e63686d61726b2e4d61736b5f68746d6c31328b010a0544" .
            "756d6d7912370a064765744d617012152e62656e63686d61726b2e4d6170" .
            "526571756573741a162e62656e63686d61726b2e4d6170526573706f6e73" .
            "6512490a0a53747265616d506f7374121c2e62656e63686d61726b2e5374" .
            "7265616d506f7374526571756573741a1d2e62656e63686d61726b2e5374" .
            "7265616d506f7374526573706f6e7365620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

