<?php
// reg.php - 注册页面渲染函数

function showMainPage() {
    ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>风萧萧兮公益机场 - OAuth 登录</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            background: #2d2d3d;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
            padding: 45px 40px;
            max-width: 520px;
            width: 100%;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo {
            font-size: 56px;
            margin-bottom: 18px;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        h1 {
            color: #fff;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .subtitle {
            color: #b3b3b3;
            font-size: 15px;
            margin-bottom: 8px;
        }
        
        .notice {
            background: rgba(255, 193, 7, 0.15);
            border-left: 4px solid #ffc107;
            padding: 16px 18px;
            border-radius: 8px;
            margin-bottom: 24px;
            text-align: left;
            color: #ffd54f;
            font-size: 13px;
            line-height: 1.6;
        }
        
        .notice-title {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 10px;
            font-weight: 600;
            font-size: 14px;
            color: #ffc107;
        }
        
        .info-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .info-title {
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .info-list {
            list-style: none;
            padding: 0;
        }
        
        .info-list li {
            color: #c7c7c7;
            font-size: 13px;
            line-height: 1.8;
            padding-left: 20px;
            position: relative;
            margin-bottom: 8px;
        }
        
        .info-list li:before {
            content: "•";
            color: #667eea;
            font-weight: bold;
            position: absolute;
            left: 6px;
        }
        
        .rules-section {
            background: rgba(33, 150, 243, 0.1);
            border-left: 4px solid #2196f3;
            padding: 16px 18px;
            border-radius: 8px;
            margin-bottom: 24px;
        }
        
        .rules-title {
            color: #64b5f6;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .rules-list {
            list-style: none;
            padding: 0;
        }
        
        .rules-list li {
            color: #90caf9;
            font-size: 13px;
            line-height: 1.8;
            padding-left: 20px;
            position: relative;
            margin-bottom: 6px;
        }
        
        .rules-list li:before {
            content: "✓";
            color: #4caf50;
            font-weight: bold;
            position: absolute;
            left: 4px;
        }
        
        .warning-box {
            background: rgba(244, 67, 54, 0.1);
            border-left: 4px solid #f44336;
            padding: 14px 16px;
            border-radius: 8px;
            margin-bottom: 24px;
        }
        
        .warning-box p {
            color: #ef5350;
            font-size: 13px;
            line-height: 1.6;
            margin: 0;
        }
        
        .warning-box strong {
            color: #ff5252;
            font-weight: 600;
        }
        
        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 16px 40px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: block;
            width: 100%;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }
        
        .btn:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">🌐</div>
            <h1>风萧萧兮公益机场</h1>
            <p class="subtitle">免费 · 公益 · 共享</p>
        </div>
        
        <div class="notice">
            <div class="notice-title">
                <span>⚠️</span>
                <span>使用须知</span>
            </div>
            <div class="notice-content">
                节点不多，正在增加中<br>
                请勿滥用，珍惜公益资源
            </div>
        </div>
        
        <div class="info-section">
            <div class="info-title">
                <span>📋</span>
                <span>注册说明</span>
            </div>
            <ul class="info-list">
                <li>使用 Linux.do 账号一键注册</li>
                <li>系统自动生成 <strong style="color: #fff;">8位数字密码</strong></li>
                <li>注册限制：需要达到 <strong style="color: #ffc107;">信任等级 2</strong> 或以上</li>
                <li>首次登录后建议立即修改密码</li>
            </ul>
        </div>
        
        <div class="rules-section">
            <div class="rules-title">
                <span>📖</span>
                <span>使用规则</span>
            </div>
            <ul class="rules-list">
                <li>仅供学习和正当用途使用</li>
                <li>禁止使用本服务进行任何违法活动</li>
                <li>禁止占用大量带宽影响他人使用</li>
                <li>禁止分享账号给他人使用</li>
                <li>违反规则将被永久封禁账号</li>
            </ul>
        </div>
        
        <div class="warning-box">
            <p><strong>⚠️ 重要提醒：</strong>请务必复制并保存好您的登录密码！如忘记密码，可重新登录本页面进行密码重置。</p>
        </div>
        
        <a href="/oauth2/auth" class="btn">
            🔐 使用 Linux DO 登录
        </a>
    </div>
</body>
</html>
<?php
}

function showStopPage() {
    ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>暂停注册</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', Arial, sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            padding: 45px 35px;
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        
        .icon {
            font-size: 56px;
            margin-bottom: 16px;
        }
        
        h1 {
            color: #d9534f;
            font-size: 26px;
            margin-bottom: 16px;
        }
        
        p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🚫</div>
        <h1>暂停注册</h1>
        <p>更新提示：我们很高兴的宣布，现服务已限时开放新一批用户上车</p>
        <p>本次推出更多功能与优化，让您的体验更加流畅、高效、稳定。</p>
    </div>
</body>
</html>
<?php
}

function showInsufficientLevelPage($trust_level, $uid, $min_id) {
    ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>等级不足 - 风萧萧兮公益机场</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', Arial, sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            padding: 45px 35px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        
        .icon {
            font-size: 64px;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #d9534f;
            font-size: 28px;
            margin-bottom: 16px;
            font-weight: 600;
        }
        
        .info-box {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #dee2e6;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            margin: 8px 0;
            background: #fff;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
        }
        
        .info-label {
            color: #666;
            font-size: 14px;
        }
        
        .info-value {
            color: #333;
            font-weight: 600;
            font-size: 15px;
        }
        
        .info-value.highlight {
            color: #d9534f;
        }
        
        .requirement {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 16px;
            border-radius: 6px;
            margin: 20px 0;
            text-align: left;
        }
        
        .requirement-title {
            color: #856404;
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .requirement-list {
            color: #856404;
            font-size: 14px;
            line-height: 1.8;
            padding-left: 20px;
        }
        
        .requirement-list li {
            margin: 6px 0;
        }
        
        .tips {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 16px;
            border-radius: 6px;
            margin: 20px 0;
            text-align: left;
        }
        
        .tips-title {
            color: #1976d2;
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .tips-content {
            color: #1565c0;
            font-size: 13px;
            line-height: 1.6;
        }
        
        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 14px 40px;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: opacity 0.2s;
            margin-top: 10px;
        }
        
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🚫</div>
        <h1>等级不足</h1>
        <p style="color: #666; margin-bottom: 20px;">抱歉，你的账号暂时无法注册使用本服务</p>
        
        <div class="info-box">
            <div class="info-item">
                <span class="info-label">📊 你的信任等级</span>
                <span class="info-value highlight">Level <?php echo htmlspecialchars($trust_level); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">🆔 你的用户 ID</span>
                <span class="info-value"><?php echo htmlspecialchars($uid); ?></span>
            </div>
        </div>
        
        <div class="requirement">
            <div class="requirement-title">
                <span>✅</span>
                <span>注册要求</span>
            </div>
            <ul class="requirement-list">
                <li><strong>信任等级 3 (Member)</strong> - 无 ID 限制</li>
                <li><strong>信任等级 2 (Regular)</strong> - 用户 ID ≤ <?php echo htmlspecialchars($min_id); ?></li>
            </ul>
        </div>
        
        <?php if ($trust_level == 2): ?>
        <div class="tips">
            <div class="tips-title">
                <span>💡</span>
                <span>你的情况</span>
            </div>
            <div class="tips-content">
                你当前是 Level 2 (Regular)，但你的用户 ID (<?php echo htmlspecialchars($uid); ?>) 大于限制的 <?php echo htmlspecialchars($min_id); ?>。
                <br><br>
                <strong>如何获得访问权限：</strong>
                <br>• 继续在 Linux DO 社区活跃，提升到 Level 3 (Member)
                <br>• 参与讨论、发布有价值的内容、获得更多赞同
            </div>
        </div>
        <?php elseif ($trust_level < 2): ?>
        <div class="tips">
            <div class="tips-title">
                <span>💡</span>
                <span>如何提升等级</span>
            </div>
            <div class="tips-content">
                你当前是 Level <?php echo htmlspecialchars($trust_level); ?>，需要提升到至少 Level 2 才能注册。
                <br><br>
                <strong>提升等级的方法：</strong>
                <br>• 在 Linux DO 社区保持活跃
                <br>• 阅读帖子、发表评论、获得点赞
                <br>• 与其他成员互动交流
                <br>• 贡献有价值的内容
            </div>
        </div>
        <?php endif; ?>
        
        <a href="https://linux.do" class="btn" target="_blank">
            🌐 前往 Linux DO 社区
        </a>
    </div>
</body>
</html>
<?php
}

function showSuccessPage($user, $passwd, $trust_level = null) {
    global $DOMIAN;
    $email = $user . '@' . $DOMIAN;
    
    // 检查用户是否已存在（密码为 null 表示已存在）
    $isExisting = ($passwd === null);
    
    ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $isExisting ? '欢迎回来' : '注册成功'; ?> - 风萧萧兮公益机场</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            background: #2a2d3a;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
            padding: 40px 35px;
            max-width: 500px;
            width: 100%;
        }
        
        .icon {
            font-size: 64px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        h1 {
            color: <?php echo $isExisting ? '#64b5f6' : '#4caf50'; ?>;
            font-size: 28px;
            margin-bottom: 16px;
            font-weight: 600;
            text-align: center;
        }
        
        .account-info {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .info-title {
            color: #b0b0b0;
            font-size: 13px;
            margin-bottom: 8px;
        }
        
        .info-value {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            background: rgba(0, 0, 0, 0.3);
            padding: 12px;
            border-radius: 8px;
            word-break: break-all;
            margin-bottom: 16px;
        }
        
        .info-value:last-child {
            margin-bottom: 0;
        }
        
        .password-display {
            font-size: 24px !important;
            letter-spacing: 4px;
            color: #4caf50 !important;
            font-family: 'Courier New', monospace;
            text-align: center;
            padding: 16px !important;
        }
        
        .tip-box {
            background: rgba(33, 150, 243, 0.15);
            border-left: 3px solid #2196f3;
            padding: 14px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #90caf9;
            font-size: 13px;
            line-height: 1.6;
        }
        
        .warning {
            background: rgba(255, 193, 7, 0.15);
            border-left: 3px solid #ffc107;
            padding: 14px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #ffd54f;
            font-size: 13px;
            line-height: 1.6;
        }
        
        .warning strong {
            color: #ffc107;
        }
        
        .linux-info {
            background: rgba(100, 181, 246, 0.1);
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 20px;
            border: 1px solid rgba(100, 181, 246, 0.3);
        }
        
        .linux-info-title {
            color: #64b5f6;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .linux-info-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            color: #b0b0b0;
            font-size: 13px;
        }
        
        .linux-info-item span:last-child {
            color: #fff;
            font-weight: 500;
        }
        
        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 14px 40px;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 10px;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }
        
        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: none;
        }
        
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
        }
        
        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none !important;
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }
        
        .modal-content {
            background: #2a2d3a;
            margin: 10% auto;
            padding: 30px;
            border-radius: 16px;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }
        
        .modal-header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .modal-icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        
        .modal-title {
            color: #ffc107;
            font-size: 20px;
            font-weight: 600;
        }
        
        .modal-body {
            color: #d0d0d0;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .modal-buttons {
            display: flex;
            gap: 10px;
        }
        
        .modal-btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .modal-btn-confirm {
            background: linear-gradient(135deg, #f44336 0%, #e91e63 100%);
            color: #fff;
        }
        
        .modal-btn-cancel {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .modal-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .register-time {
            color: #888;
            font-size: 12px;
            text-align: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .new-password-box {
            background: rgba(76, 175, 80, 0.1);
            border: 2px solid #4caf50;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
        }
        
        .new-password-label {
            color: #81c784;
            font-size: 13px;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .new-password-value {
            font-size: 32px;
            letter-spacing: 6px;
            color: #4caf50;
            font-family: 'Courier New', monospace;
            text-align: center;
            font-weight: bold;
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 8px;
        }
        
        .copy-btn {
            background: rgba(76, 175, 80, 0.2);
            color: #4caf50;
            border: 1px solid #4caf50;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s;
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon"><?php echo $isExisting ? '👋' : '🎉'; ?></div>
        <h1><?php echo $isExisting ? '账号信息' : '注册成功！'; ?></h1>
        
        <?php if ($isExisting): ?>
            <div class="tip-box">
                ℹ️ 此 Linux.do 账号已经注册过了，以下是你的账号信息
            </div>
            
            <div class="account-info">
                <div class="info-title">📧 账号邮箱</div>
                <div class="info-value"><?php echo htmlspecialchars($email); ?></div>
            </div>
            
            <?php
            $createdTime = getUserCreatedTime($email);
            if ($createdTime) {
                echo '<div class="register-time">📅 注册时间: ' . date('Y-m-d H:i:s', $createdTime) . '</div>';
            }
            ?>
            
            <div class="linux-info">
                <div class="linux-info-title">🔗 Linux.do 关联信息</div>
                <div class="linux-info-item">
                    <span>用户名:</span>
                    <span>@<?php echo htmlspecialchars($user); ?></span>
                </div>
                <?php if ($trust_level !== null): ?>
                <div class="linux-info-item">
                    <span>信任等级:</span>
                    <span><?php echo htmlspecialchars($trust_level); ?></span>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="warning">
                ⚠️ <strong>密码提示：</strong>如果忘记密码可以点击下方重置密码按钮。
            </div>
            
            <button class="btn" onclick="window.location.href='/#/login'">🔐 前往登录</button>
            <button class="btn btn-secondary" onclick="showResetModal('<?php echo htmlspecialchars($email, ENT_QUOTES); ?>')">🔄 重置密码</button>
            
        <?php else: ?>
            <div class="warning">
                ⚠️ <strong>重要：</strong>以下信息仅显示一次，请务必保存！
            </div>
            
            <div class="account-info">
                <div class="info-title">📧 登录邮箱</div>
                <div class="info-value"><?php echo htmlspecialchars($email); ?></div>
                
                <div class="info-title" style="margin-top: 16px;">🔑 登录密码（8位数字）</div>
                <div class="info-value password-display"><?php echo htmlspecialchars($passwd); ?></div>
            </div>
            
            <div class="tip-box">
                💡 这是系统自动生成的8位数字密码，方便记忆。
            </div>
            
            <button class="btn" onclick="window.location.href='/#/login'">✅ 我已保存，前往登录</button>
        <?php endif; ?>
    </div>
    
    <div id="resetModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-icon" id="modalIcon">⚠️</div>
                <div class="modal-title" id="modalTitle">确认重置密码？</div>
            </div>
            <div class="modal-body" id="modalBody">
                重置后将生成新的8位数字密码，旧密码将立即失效。
            </div>
            <div class="modal-buttons" id="modalButtons">
                <button class="modal-btn modal-btn-cancel" onclick="closeModal()">取消</button>
                <button class="modal-btn modal-btn-confirm" onclick="confirmReset()">确认重置</button>
            </div>
        </div>
    </div>
    
    <script>
    let resetEmail = '';
    
    function showResetModal(email) {
        resetEmail = email;
        document.getElementById('resetModal').style.display = 'block';
    }
    
    function closeModal() {
        document.getElementById('resetModal').style.display = 'none';
    }
    
    function confirmReset() {
        const confirmBtn = document.querySelector('.modal-btn-confirm');
        confirmBtn.disabled = true;
        confirmBtn.innerHTML = '<span class="loading"></span> 重置中...';
        
        fetch('', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'action=reset_password&email=' + encodeURIComponent(resetEmail)
        })
        .then(r => r.json())
        .then(data => {
            if (data.success) {
                document.getElementById('modalIcon').textContent = '✅';
                document.getElementById('modalTitle').textContent = '密码已重置！';
                document.getElementById('modalTitle').style.color = '#4caf50';
                document.getElementById('modalBody').innerHTML = `
                    <div class="new-password-box">
                        <div class="new-password-label">🔑 新密码</div>
                        <div class="new-password-value">${data.password}</div>
                        <div style="text-align: center;">
                            <button class="copy-btn" onclick="copyPassword('${data.password}')">📋 复制</button>
                        </div>
                    </div>
                `;
                document.getElementById('modalButtons').innerHTML = `
                    <button class="modal-btn modal-btn-confirm" onclick="window.location.href='/#/login'" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        🔐 使用新密码登录
                    </button>
                `;
            } else {
                document.getElementById('modalIcon').textContent = '❌';
                document.getElementById('modalTitle').textContent = '重置失败';
                document.getElementById('modalBody').textContent = data.message || '发生错误';
            }
        })
        .catch(() => {
            document.getElementById('modalIcon').textContent = '❌';
            document.getElementById('modalTitle').textContent = '网络错误';
        });
    }
    
    function copyPassword(password) {
        const textarea = document.createElement('textarea');
        textarea.value = password;
        textarea.style.position = 'fixed';
        textarea.style.opacity = '0';
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        event.target.textContent = '✅ 已复制';
        setTimeout(() => event.target.textContent = '📋 复制', 2000);
    }
    
    window.onclick = function(event) {
        if (event.target == document.getElementById('resetModal')) {
            closeModal();
        }
    }
    </script>
</body>
</html>
<?php
}
?>
