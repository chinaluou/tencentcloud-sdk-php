<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDigest() 获取哈希值
 * @method void setDigest(string $Digest) 设置哈希值
 * @method integer getSize() 获取镜像大小
 * @method void setSize(integer $Size) 设置镜像大小
 * @method string getImageVersion() 获取Tag名称
 * @method void setImageVersion(string $ImageVersion) 设置Tag名称
 */

/**
 *镜像信息
 */
class TcrImageInfo extends AbstractModel
{
    /**
     * @var string 哈希值
     */
    public $Digest;

    /**
     * @var integer 镜像大小
     */
    public $Size;

    /**
     * @var string Tag名称
     */
    public $ImageVersion;
    /**
     * @param string $Digest 哈希值
     * @param integer $Size 镜像大小
     * @param string $ImageVersion Tag名称
     */
    function __construct()
    {

    }
    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }
    }
}
