<?php

namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'JGJCDXZJL',
        IResourceCatalog::TYPE['SJJXMXX'] => 'SJJXMXX',
        IResourceCatalog::TYPE['QIYEJBXX'] => 'QIYEJBXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['HNMPCPXX'] => 'HNMPCPXX',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['QYZXXX'] => 'QYZXXX',
        IResourceCatalog::TYPE['QYDXXX'] => 'QYDXXX',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'CCJCJGXX',
        IResourceCatalog::TYPE['FRXX'] => 'FRXX',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'ESCJDPGJGHZZS',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'ZYJNZSXX',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
        IResourceCatalog::TYPE['SYBXXX'] => 'SYBXXX',
        IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
        IResourceCatalog::TYPE['GZRYXX'] => 'GZRYXX',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'YZTQNMGGZHMD',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'SLYSXKZXX',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'GRRYXXJTJ',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'ZDSSWFAJXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'GRRYXXMZJ',
        IResourceCatalog::TYPE['MBFQYML'] => 'MBFQYML',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'SHTTDJXX',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'SFJDJGCYRYZGXX',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'SFJDJGDJXX',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'GZJGJBXX',
        IResourceCatalog::TYPE['GZYXX'] => 'GZYXX',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'JCFLFWSXX',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'JCFLFWGZZJBXX',
        IResourceCatalog::TYPE['LSSWSXX'] => 'LSSWSXX',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'LSZYZGZXX',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'JGRYXXSSFJ',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => 'SJQYJSZXRDXX',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'SLGCZBXX',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => 'GJJLTQYRZXX',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'DTJXJGRXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['HNSZLJDW'] => 'HNSZLJDW',
        IResourceCatalog::TYPE['XSPJXX'] => 'XSPJXX',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'SXBZXJGXX',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'SXBZXRMD',
        IResourceCatalog::TYPE['XZXKQYXX'] => 'XZXKQYXX',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => 'QSLHXJJTJL',
        IResourceCatalog::TYPE['SPFYSXK'] => 'SPFYSXK',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => 'FDCKFQYZZXX',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => 'JGRYXXSFGJ',
        IResourceCatalog::TYPE['XYTXHMD'] => 'XYTXHMD',
        IResourceCatalog::TYPE['SYDWJBXX'] => 'SYDWJBXX',
        IResourceCatalog::TYPE['XZQZ'] => 'XZQZ',
        IResourceCatalog::TYPE['XZZS'] => 'XZZS',
        IResourceCatalog::TYPE['XZCJ'] => 'XZCJ',
        IResourceCatalog::TYPE['XZQR'] => 'XZQR',
        IResourceCatalog::TYPE['XZJF'] => 'XZJF',
        IResourceCatalog::TYPE['JDJC'] => 'JDJC',
        IResourceCatalog::TYPE['XZJL'] => 'XZJL',
        IResourceCatalog::TYPE['QTXZZF'] => 'QTXZZF',
        IResourceCatalog::TYPE['HEIMDXX'] => 'HEIMDXX',
        IResourceCatalog::TYPE['HONGMDXX'] => 'HONGMDXX',
        IResourceCatalog::TYPE['HYFJFLJG'] => 'HYFJFLJG',
        IResourceCatalog::TYPE['QYHYSJ'] => 'QYHYSJ',
        IResourceCatalog::TYPE['TEST'] => 'TEST',
        IResourceCatalog::TYPE['DWYSZCXX'] => 'DWYSZCXX',
        IResourceCatalog::TYPE['TQMYQYZK'] => 'TQMYQYZK',
        IResourceCatalog::TYPE['ZFCGHT'] => 'ZFCGHT',
        IResourceCatalog::TYPE['GGZYJYHT'] => 'GGZYJYHT',
        IResourceCatalog::TYPE['GQCGHT'] => 'GQCGHT',
        IResourceCatalog::TYPE['GCJSHT'] => 'GCJSHT',
        IResourceCatalog::TYPE['QTHT'] => 'QTHT',
        IResourceCatalog::TYPE['XYSFSQ'] => 'XYSFSQ',
        IResourceCatalog::TYPE['CCJCJG'] => 'CCJCJG',
        IResourceCatalog::TYPE['SHJJLYHT'] => 'SHJJLYHT',
        //@position
    );
}
