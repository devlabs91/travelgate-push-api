Issues
======

Fix needed after generation, if not fixed the following notice appears :

    Declaration of Devlabs91\TravelgatePushApi\StructType\ErrorType::set_(?Devlabs91\TravelgatePushApi\StructType\FreeTextType $_ = NULL) should be compatible with Devlabs91\TravelgatePushApi\StructType\FreeTextType::set_($_ = NULL)


    diff --git a/src/StructType/ErrorType.php b/src/StructType/ErrorType.php
    index ed71e46..663eb31 100644
    --- a/src/StructType/ErrorType.php
    +++ b/src/StructType/ErrorType.php
    @@ -62,7 +62,7 @@ class ErrorType extends FreeTextType
          * @param \Devlabs91\TravelgatePushApi\StructType\FreeTextType $_
          * @return \Devlabs91\TravelgatePushApi\StructType\ErrorType
          */
    -    public function set_(\Devlabs91\TravelgatePushApi\StructType\FreeTextType $_ = null)
    +    public function set_($_ = null)
         {
             $this->_ = $_;
             return $this;
