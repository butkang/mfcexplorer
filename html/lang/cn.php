<?php
function lang($phrase){
    static $lang = array(
 'CHAIN_COIN' => '块链币龄销毁 [天/币]',
                'AVGCHAIN_DAYS' => '&#216; 块链成熟度 [<small><sup>天</sup>/<sub>币</sub></small>]',
                'CHAIN_DAYS' => '区块链成熟度 [天]',
                'COIN_MFC' => '崛起币[MFC]产出总量',
                'DAYS_DAYS' => '天',
                'DIFFICULTY_DIFFICULTY' => '难度系数',
                'EMPTY_ADDRESSES' => '空钱包地址',
                'FLAG_FLAG' => '采掘类型',
                'HOURS_HOURS' => '小时',
                'ID_ID' => 'ID',
                'IN_ADDRESSES' => '使用中的钱包地址',
                'MINUTES_MINUTES' => '分钟',
                'NEWER_NEWER' => '更新区块',
                'OLDER_OLDER' => '更旧区块',
                'POS_COIN' => 'PoS &#216; 币龄销毁 [<small><sup>天</sup>/<sub>币</sub></small>]',
                'POS_DAYS' => 'PoS 币龄销毁 [天]',
                'POS_MFC' => 'PoS利息成本 [MFC]',
                'POS_POS' => 'PoS',
                'POW_POW' => 'PoW',
                'REWARD_MFC' => '奖励 [MFC]',
                'SEARCH_SEARCH' => '搜索',
                'SECONDS_SECONDS' => '秒',
                'SELECT_RANGE' => '选择区块范围',
                'SHOW_COLUMNS' => '显示/隐藏 专栏',
                'TIME_AGO' => '块龄',
                'TX_COIN' => '交易 &#216; 币龄销毁 [<small><sup>天</sup>/<sub>币</sub></small>]',
                'TX_COUNT' => '交易笔数',
                'TX_DAYS' => '交易币龄销毁 [天]',
                'TX_VOLUME_MFC' => '转出总量 [MFC]',
                'TX_FEE_MFC' => '交易费 [MFC]',
                'AVERAGE_CHARTS' => '平均交易图表',
                'DAILY_SUMMARY' => '每日摘要',
                'AVG_AGE' => '平均币龄',
                'COIN_DESTROYED' => '币龄销毁',
                'COIN_SUPPLY' => '当前产出总量',
                'POW_MINTED' => 'PoW/PoS MFC开采量',
                'TOTAL_AGE' => '总币龄',
                'UNUSED_ADDRESSES' => '未使用钱包地址',
                'USED_ADDRESSES' => '已使用钱包地址',
                'CHANNEL_ADS' => '频道, 如：广告',
                'SPECIFY_CHANNEL' => '指定通道',
                'SUBJECT_PATTERN' => '主题（模式）',
                'TYPE_BUY' => '类型, 如：出售，购买',
                'DO_SERVICE' => '您中意该服务吗？',
                'DONATION_DONATION' => '捐赠',
                'INFO_FEEDBACK' => '信息/反馈',
                'REFERRAL_REFERRAL' => '推介',
                'COINS_AVAILABLE' => '产出总量',
                'CONFIRMED_TRANSACTIONS' => '交易笔数',
                'EXPLORE_EXPLORE' => '区块浏览',
                'LATEST_BLOCK' => '最新区块',
                'POS_DIFFICULTY' => 'PoS 难度系数',
                'POW_DIFFICULTY' => 'PoW 难度系数',
                'THERE_TRANSACTIONS' => '目前没有未确认的交易.',
                'TRANSACTION_VOLUME' => '交易总量',
                'TX_ID' => '交易ID',
                'UNCONFIRMED_TRANSACTIONS' => '未确认交易',
                'VALUE_MFC' => '转出总量 [MFC]',
                'WELCOME_EXPLORER' => '欢迎来到崛起币(Emercoin)区块浏览器',
                'ADDRESS_TX' => '钱包地址/区块/交易',
                'CHAIN_CHAIN' => '区块链',
                'CHARTS_CHARTS' => '图表',
                'EMERBOARD_EMERBOARD' => 'EmerBoard',
                'NVS_NVS' => '域名系统',
                'SHOW_SHOW' => '显示',
                'STATS_STATS' => '统计',
                'TOP_TOP' => '财富榜Top100',
                'N_HIDE' => '无数据: 隐藏',
                'N_SHOW' => '无数据: 显示',
                'NAME_NAME' => '标签',
                'REGISTERED_AT' => '注册区块',
                'RESULTS_PAGE' => '每页显示条数:',
                'SEARCH_NVS' => '搜索域名值存储系统',
                'TYPE_TYPE' => '类型',
                'VALID_DATED' => '所有',
                'VALID_ONLY' => '仅有效',
                'VALID_UNTIL' => '有效至',
                'VALUE_VALUE' => '数量',
                'VALUE_VALUENVS' => '值',
                '24H_STATISTICS' => '24小时内统计数据',
                '24H_STATISTICS' => '24小时内交易统计',
                'AVG_COIN' => '平均 天/币',
                'BASED_H' => '基于最近的24小时',
                'BASED_TRANSACTIONS' => '基于最近的24小时 - 不包含Coinbase和PoS利息',
                'BLOCKCHAIN_STATISTICS' => '区块链统计数据',
                'BLOCKS_BLOCKS' => '区块',
                'BLOCKS_FOUND' => '采掘区块量',
                'CHAIN_LENGTH' => '区块序号', 
                'CHAIN_SIZE' => '主区块链大小',
                'COIN_DESTROYED' => '币龄销毁',
                'MFC_MINTED' => 'EMC采掘量',
                'GENERAL_DAYS' => '常规统计 - 标签显示推测的每日变化（基于最近的14天）',
                'KNOWN_ADDRESSES' => '已知钱包地址',
                'MINUTES_BLOCKS' => '区块生成间隔',
                'NAME_STATISITICS' => '域名统计数据',
                'TOP_TYPES' => '最高的5种类型',
                'TOTAL_FEES' => '交易费总量',
                'TOTAL_OUTPUT' => '转出交易总量',
                'TOTAL_TOTAL' => '总量', 
                'TOTAL_VALUES' => '总值', 
                'TRANSACTIONS_TRANSACTIONS' => '交易历史',
                'UNUSED_UNUSED' => '未使用',
                'USED_USED' => '已使用',
                'VALID_RECORDS' => '有效DNS记录',
                'VALID_VALUES' => '有效值',
                'ACCOUNT_ACCOUNT' => '账户',
                'ADDRESS_ADDRESS' => '钱包地址',
                'BALANCE_MFC' => '余额 [MFC]',
                'HOLDINGS_MFC' => '持有量 [MFC]',
                'LAST_RECEIVE' => '最新收入',
                'LAST_SENT' => '最新发出',
                'OTHERS_OTHERS' => '其他',
                'PERCENTAGE_COINS' => '占总币量百分比 [%]',
                'PERCENTAGE_PERCENTAGE' => '占比 [%]',
                'RANK_RANK' => '排序',
                'TOP_ACCOUNTS' => '富豪榜账户',
                'TOP_100ACCOUNTS' => '富豪榜前100账户',
                'TOP_ADDRESSES' => '富豪钱包地址',
                'WEALTH_DISTRIBUTION' => '财富分布',
                'ADDITIONAL_APPLY' => '添加额外手续费',
                'ADDRESS_BOOK' => '地址薄',
                'ALL_TRANSACTIONS' => '所有交易',
                'AMOUNT_MFC' => '数量 [MFC]',
                'BALANCE_BALANCE' => '余额',
                'BETA_RISK' => 'Beta阶段 - 使用者自行承担风险!',
                'BUY_ADDRESS' => '购买一个新钱包地址',
                'CAPTCHA_CAPTCHA' => '验证码',
                'CATEGORY_CATEGORY' => '分类',
                'FEE_FEE' => '交易费',
                'FROM_TO' => '来自/发往',
                'GET_ADDRESS' => '获得一个新钱包地址',
                'I_THE' => '我接受该',
                'TERMS_SERVICE' => '服务条款',
                'LABEL_LABEL' => '标注',
                'LOGIN_LOGIN' => '登陆',
                'NAME_DELETE' => '删除域名值存储系统(NVS)',
                'NAME_NAME' => '域名', 
                'NEW_NAME' => '域名值(NVS)',
                'NAME_UPDATE' => '更新域名(NVS)',
                'NEW_ADDRESS' => '新钱包地址',
                'NEW_ENTRY' => '新增地址标签',
                'NVS_NVS' => '域名值存储系统（NVS）',
                'OR_OR' => '或', 
                'OVERVIEW_OVERVIEW' => '概况',
                'SETTINGS_SETTINGS' => '设置',
                'LOGOUT_LOGOUT' => '登出',
                'PASSWORD_PASSWORD' => '密码',
                'RECEIVE_RECEIVE' => '接收',
                'RECENT_TRANSACTIONS' => '最近交易',
                'REGISTER_REGISTER' => '注册',
                'REPEAT_PASSWORD' => '再次输入密码',
                'SAVE_SAVE' => '保存',
                'SEND_SEND' => '发送',
                'STAKE_STAKE' => '利息',
                'STATUS_STATUS' => '状态',
                'THIS_BALANCE1' => '该笔交易将从您的账户余额中消耗',
                'THIS_BALANCE2' => '崛起币（MFC）。',
                'TRANSACTION_MFC' => '交易费:',
                'USERNAME_USERNAME' => '用户名',
                'VALID_EXTERNAL' => '有效 (站外)',
                'VALID_INTERNAL' => '有效 (站内)',
                'VOLUME_VOLUME' => '交易总量',
                'MFCSSL_VERYHIGH' => '同时使用当前密码和EMCSSL登陆 [超级安全]',
                'MFCSSL_HIGH' => '使用EMCSSL [高安全]',
                'MFCSSL_LOW' => '使用EMCSSL或密码 [低安全]',
                'MFCSSL_DEACTIVATE' => '解除EMCSSL证书登陆绑定',
                'YOUR_CERTIFICATE' => '您的MFCSSL证书',
                'YOU_LOGIN' => '您可以使用MFCSSL来保证您的登陆安全。',
                'WHAT_MFCSSL' => '什么是EMCSSL?',
                'MFCSSL_SET' => 'EMCSSL设置已保存',
                'UPDATE_SETTINGS' => '更新设置',
                'CURRENT_PASSWORD' => '当前密码',
                'NEW_PASSWORD' => '新密码',
                'REPEATNEW_PASSWORD' => '再次输入新密码',
                'DAYS_COIN' => '<sup>天</sup>/<sub>币</sub>',
                'ANNUAL_GROWTH' => '年增长率',
                'PER_CHARTS' => '每区块图表',
                'POS_DIFF' => 'PoS 难度系数',
                'POW_DIFF' => 'PoW 难度系数',
                'COIN_AGE' => '币龄',
                'TX_ONLY' => '带交易费的交易 > 0',
                'POW_BLOCKS' => 'PoW/PoS 区块',
                'TOP_100ADDRESSES' => '前100地址',
                'NEVER_NEVER' => '从不',
                'ALL_ALL' => '全部',
                'COIN_DISTRIBUTION' => '持有量占比', 
                'LOGIN_SUCCESSFULL' => '登陆成功',
                'LOGIN_NOTSUCCESSFULL' => '登陆失败',
                'AT_NECESSARY' => '最少4个字符',
                'PLEASE_CHARACTERS' => '最多50个字符',
                'A_REQUEST' => '有一个错误发生，请检查您的请求',
                'PLEASE_SERVICE' => '请同意服务条款。',
                'PASSWORDS_MATCH' => '密码匹配',
                'PASSWORDS_NOMATCH' => '密码不匹配',
                'THIS_TAKEN' => '该用户名已占用',
                'THIS_FREE' => '该用户名可以注册',
                'INVALID_CAPTCHA' => '验证码无效',
                'REQUEST_INCOMPLETE' => '请求不完整',
                'USER_CREATED' => '用户已创建',
                'UNCONFIRMED_UNCONFIRMED' => '未确认',
                'RESERVED_RESERVED' => '保存至地址薄', 
                'STOCK_BTC' => '市场价 - MFC/BTC', 
                'STOCK_USD' => '市场价 - MFC/USD', 
                'STAKE_PERIOD' => '本时段利息',
                'EARNED_STAKE' => '利息收入',
                'AVERAGE_AT' => '均价',
                'VWAP_VWAP' => '成交量加权均价',
                'LAST_LAST' => '最近',
                'LOW_LOW' => '最低价',
                'HIGH_HIGH' => '最高价',
                'SENT_SENT' => '发出',
                'INVALID_INVALID' => '无效',
                'THIS_EXTERNALADDRESS' => '这是一个站外钱包地址',
                'THIS_INVALIDADDRESS' => '该钱包地址无效',
                'THIS_TO' => '该地址属于',
                'YOU_YOU' => '您',
                'NEW_CREATED' => '新钱包地址已创建',
                'SOMETHING_WRONG' => '不对劲，有错误发生。',
                'SYSTEM_SYSTEM' => '系统',
                'ADDRESS_REMOVED' => '地址薄标签已移除。',
                'NAME_CHANGED' => '标签已改变。',
                'ADDRESS_CHANGED' => '地址已改变。',
                'SEND_COINS' => '发送MFC',
                'THIS_SUBSTRACTBALANCE' => '该笔交易将从您的余额中消耗"+ (parseFloat(amount)+parseFloat(fee)) +"MFC。',
                'THIS_SUBSTRACTBALANCE2' => '该笔交易将从您的余额中消耗 "+amount+" MFC。',
                'TRANSACTION_QUEUE' => '交易记录已添加到队列。',
                'MFC_TO' => 'EMC 已发送至',
                'ADDRESSES_ADDRESSES' => '钱包地址',
                'RECEIVED_RECEIVED' => '收到',
                'LABEL_CHANGED' => '标签已改变',
                'NEW_ADDRESSCREATED' => '新地址已创建',
                'REGISTER_PAIR' => '注册域名->值', 
                'UPDATE_PAIR' => '更新域名->值',
                'DELETE_PAIR' => '删除域名->值',
                'REGISTER_NAME' => '注册域名',
                'THE_LATER' => '钱包客户端提供直接发币到姓名的可能，该姓名将映射到一个新的注册地址。
币将发送至该新地址，该地址不会在您的账户内创建，您稍后可将该注册地址更改至您自己所拥有的某一确定地址或其他地址。',
                'ADDITIONAL_DAYS' => '增加额外天数',
                'UPDATE_NAME' => '更新域名值存储系统',
                'MOVE_ADDRESS' => '转移域名至其它钱包地址',
                'DELETE_NAME' => '删除域名值存储系统',
                'NAME_REGFEES' => '域名注册费',
                'NAME_UPFEES' => '域名更新费',
                'NAME_CONFIRMED' => '域名已注册成功！请等待确认！',
                'NAME_DELETED' => '域名已删除',
                'NAME_UPSUCCESS' => '域名已更新成功',
                'THIS_NAMETAKEN' => '该域名已注册',
                'BLOCK_DETAILS' => '区块详情',
                'HASH_HASH' => '哈希值',
                'TIME_TIME' => '时间',
                'NONCE_NONCE' => '杂凑随机数',
                'MERKLE_ROOT' => '梅克莱根',
                'INPUTS_INPUTS' => '转入总量',
                'OUTPUTS_OUTPUTS' => '转出总量',
                'MINT_MINT' => '铸币', 
                'SIZE_SIZE' => '文件大小',
                'COIN_COIN' => '币',
                'UNKNOWN_BLOCK' => '未知区块',
                'PLEASE_HASH' => '请提供有效钱包地址、区块哈希值、区块ID或交易哈希值。',
                'TRANSACTION_OVERVIEW' => '交易概况',
                'DATE_DATE' => '日期',
                'UNKNOWN_ADDRESS' => '未知钱包地址',
                'NO_PROVIDED' => '钱包地址未提供',
                'COINS_COINS' => '数量',
                'RECEIVED_TX' => '收到的交易',
                'SPEND_TX' => '交易花费', 
                'AGE_AGE' => '币龄',
                'MINTING_CHANCE' => '铸币机会',
                'WITHIN_H' => '24小时内',
                'ESTIMATED_REWARD' => '奖励估算',
                'ESTIMATED_ACCVALUE' => '账户估值',
                'SHOW_ADDRESSES' => '显示空钱包地址',
                'TRANSACTION_DETAILS' => '交易细节',
                'CONFIRMED_BLOCK' => '确认区块',
                'TRACE_TRACE' => '追踪',
                'COIN_DAYS' => '币龄', 
                'UNSPEND_UNSPEND' => '未用余额', 
                'MAINTENANCE_MAINTENANCE' => 'Emercoin 区块浏览器正在维护，请稍后！',
				'UNKNOWN_TRANSACTIONS' => '未知交易',
				'NO_TXPROVIDED' => '尚无交易数据',
				'TRACE_OF' => '追踪于',
				'CLAIM_NAME' => '认领域名',
                'CLAIM_INFO' => '如果您已将域名转移到您的在线钱包地址（通过"域名更新"），您可在此认领域名所有权。',
                'NAME_CLAIMED' => '您已认领了此域名。',
                'NAME_BELONG' => '该域名同您的钱包地址不匹配，也许不属于您。',
                'NAME_NOTREGISTERED' => '该域名未注册。',
				'INTEREST_INTEREST' => 'Interest',
				'EXPECTED_INTEREST' => 'Expected annual interest',
				'AVERAGE_INTEREST' => 'Average daily interest',
				'BASED_M' => 'based on the last month',
				'WALLET_BLOCKS' => 'Blocks Found',
				'POOL_STATISTICS' => 'Pool Statistics'
		);
    return $lang[$phrase];
}
?>
