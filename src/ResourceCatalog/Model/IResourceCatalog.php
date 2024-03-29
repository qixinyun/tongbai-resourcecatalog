<?php

namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'SXBZXRMD' => 3,
        'FRXX' => 4,
        'QIYEJBXX' => 5,
        'GTGSHXX' => 6,
        'CMQYSBXX' => 7,
        'YPLSQYXX' => 8,
        'JGRYXX' => 9,
        'SXQYHMD' => 10,
        'SPYPTSJBJLGR' => 11,
        'SPYPTSJBJLDW' => 12,
        'HNMPCPXX' => 13,
        'QYYCMLXX' => 14,
        'QYZXXX' => 15,
        'QYDXXX' => 16,
        'CCJCJGXX' => 17,
        'JGJCDXZJL' => 18,
        'YSCRJZJJJZGRDXX' => 19,
        'JDCWFXX' => 20,
        'JSZGXX' => 21,
        'SJYXXS' => 22,
        'JYJGXINXI' => 23,
        'GRRYXXJYJ' => 24,
        'JGRYXXSJYJ' => 25,
        'ESCJDPGJGHZZS' => 26,
        'ZYJNZSXX' => 27,
        'YLBXXX' => 28,
        'YZTQSBXXHMD' => 29,
        'SYBXXX' => 30,
        'SBQYXX' => 31,
        'GZRYXX' => 32,
        'YZTQNMGGZHMD' => 33,
        'SLYSXKZXX' => 34,
        'GRRYXXJTJ' => 35,
        'QYGSZXXX' => 36,
        'AJNSRXX' => 37,
        'ZDSSWFAJXX' => 38,
        'QYDSXZCFXX' => 39,
        'SHZZNJXX' => 40,
        'GRRYXXMZJ' => 41,
        'MBFQYML' => 42,
        'SHTTDJXX' => 43,
        'SFJDJGCYRYZGXX' => 44,
        'SFJDJGDJXX' => 45,
        'GZJGJBXX' => 46,
        'GZYXX' => 47,
        'JCFLFWSXX' => 48,
        'JCFLFWGZZJBXX' => 49,
        'LSSWSXX' => 50,
        'LSZYZGZXX' => 51,
        'JGRYXXSSFJ' => 52,
        'SJQYJSZXRDXX' => 53,
        'ZFCGDLJGXX' => 54,
        'SLGCZBXX' => 55,
        'GJJLTQYRZXX' => 56,
        'DTJXJGRXX' => 57,
        'TJDCDXML' => 58,
        'HNSZLJDW' => 59,
        'XSPJXX' => 60,
        'SXBZXJGXX' => 61,
        'SJJXMXX' => 62,
        'XZXKQYXX' => 63,
        'QSLHXJJTJL' => 64,
        'SPFYSXK' => 65,
        'FDCKFQYZZXX' => 66,
        'JGRYXXSFGJ' => 67,
        'XYTXHMD' => 68,
        'SYDWJBXX' => 69,
        'HEIMDXX' => 78,
        'HONGMDXX' => 79,
        'HYFJFLJG' => 80,
        'QYHYSJ' => 81,
        'DWYSZCXX' => 82,
        'TQMYQYZK' => 83,
        'ZFCGHT' => 84,
        'GGZYJYHT' => 85,
        'GQCGHT' => 86,
        'GCJSHT' => 87,
        'QTHT' => 88,
        'CCJCJG' => 89,
        'XYSFSQ' => 90,
        'XZQZ' => 91,
        'XZZS' => 92,
        'XZCJ' => 93,
        'XZQR' => 94,
        'XZJF' => 95,
        'JDJC' => 96,
        'XZJL' => 97,
        'QTXZZF' => 98,
        'SHJJLYHT' => 99,
        //@position_type_100
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['CCJCJG'],
        ),
        IUserGroup::ID['FGW'] => array(
            self::TYPE['JGJCDXZJL'],
            self::TYPE['TEST'],
            self::TYPE['SJJXMXX'],
            self::TYPE['SYDWJBXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XCZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XNYNCJ'] => array(
            self::TYPE['GJJLTQYRZXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XSLJ'] => array(
            self::TYPE['SLGCZBXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XSTJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XSWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XJTJ'] => array(
            self::TYPE['SLYSXKZXX'],
            self::TYPE['GRRYXXJTJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],

        ),
        IUserGroup::ID['XGXJ'] => array(
            self::TYPE['SJQYJSZXRDXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['TQMYQYZK'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XJYTYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XGLJ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XWJW'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XZJJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XWLJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],

        ),
        IUserGroup::ID['XCGJ'] => array(
            self::TYPE['XZXKQYXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XSJJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],

            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],

        ),
        IUserGroup::ID['XSCJGJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['HNMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['FRXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XYJJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XXCZXJ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XGGZYJYZX'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XFGZX'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XYBJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XZRZYJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
            self::TYPE['XYTXHMD'],
            self::TYPE['QYHYSJ'],
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XLYJ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XQXJ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XTJJ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XXFJYDD'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XHYZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XZZZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XYHZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XFJZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XDHZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XWCZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XMJZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XCJX'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XXJX'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XCWZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XHGZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XAPZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XXJZZYKFQ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XHGCYJJQ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XGXZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XCGZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XHLX'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        ),
        IUserGroup::ID['XPSZ'] => array(
            self::TYPE['XZQZ'],
            self::TYPE['XZZS'],
            self::TYPE['XZCJ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJF'],
            self::TYPE['JDJC'],
            self::TYPE['XZJL'],
            self::TYPE['QTXZZF'],
        )
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
