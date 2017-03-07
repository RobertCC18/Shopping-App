<?php if($json == "json"): ?>
{
"monthlypayment":<?= $monthlypayment ?>,
"difference":<?= $difference ?>,
"firstpayment":<?= $firstpayment ?>,
"loanprincipal":<?= $loanprincipal ?>,
"bonustimes":<?= $bonustimes ?>,
"interest":<?= $interest ?>,
"total":<?= $total ?>,
"leasingprice":<?= $leasingprice ?>,
"logid":<?= $logid ?>
}
<?php else: ?>
<?php echo $javascript->link('jquery-1.6.3.js', false); ?>
<dl id="result">
<span class="mptitle"><img src="<?= CAKEPHP_URL ?>/img/monthly.gif" /></span>
<span class="monthlypayment">¥<?= number_format($monthlypayment) ?></span>
<dt>実質年率</dt>
<?php if($difference > 0){ ?>
<dd><span id="difference"><?= number_format($selectedrate,2) ?>%</span></dd>
<?php }else{ ?>
<dd><?= $selectedrate ?>%</dd>
<?php } ?>
<?php switch($plan){ ?>
<?php case "wp": ?>

<!-- wp -->
<dt class="odd">ローン元金</dt>
<dd class="odd">¥<?= number_format($loanprincipal) ?></dd>
<dt>初回お支払い額</dt>
<dd>¥<?= number_format($firstpayment) ?></dd>
<dt class="odd">2回目以降お支払い額（<?= $get['installments'] - 1 ?>回）</dt>
<dd class="odd">¥<?= number_format($monthlypayment) ?></dd>
<dt>ボーナス月加算金額（<?= $bonustimes ?>回）</dt>
<dd>¥<?= number_format($get['bonuspayment']) ?></dd>
<dt class="odd">最終回お支払い額（残価）</dt>
<dd class="odd">¥<?= number_format($get['lastpayment']) ?></dd>
<dt>分割払い手数料</dt>
<dd>¥<?= number_format($interest) ?></dd>
<dt class="odd">ローンお支払い総額</dt>
<dd class="odd">¥<?= number_format($total) ?></dd>
<!-- wp -->

<?php break; ?>

<?php case "swp": ?>

<!-- swp -->
<dt class="odd">ローン元金</dt>
<dd class="odd">¥<?= number_format($loanprincipal) ?></dd>
<dt>初回お支払い額</dt>
<dd>¥<?= number_format($firstpayment) ?></dd>
<dt class="odd">2回目以降お支払い額（<?= $get['installments'] - 1 ?>回）</dt>
<dd class="odd">¥<?= number_format($monthlypayment) ?></dd>
<dt>ボーナス月加算金額（<?= $bonustimes ?>回）</dt>
<dd>¥<?= number_format($get['bonuspayment']) ?></dd>
<dt class="odd">最終回お支払い額（残価）</dt>
<dd class="odd">¥<?= number_format($get['lastpayment']) ?></dd>
<dt>分割払い手数料</dt>
<dd>¥<?= number_format($interest) ?></dd>
<dt class="odd">ローンお支払い総額</dt>
<dd class="odd">¥<?= number_format($total) ?></dd>
<!-- swp -->

<?php break; ?>

<?php case "std": ?>

<!-- std -->
<dt class="odd">ローン元金</dt>
<dd class="odd">¥<?= number_format($loanprincipal) ?></dd>
<dt>初回お支払い額</dt>
<dd>¥<?= number_format($firstpayment) ?></dd>
<dt class="odd">2回目以降お支払い額（<?= $get['installments'] - 1 ?>回）</dt>
<dd class="odd">¥<?= number_format($monthlypayment) ?></dd>
<dt>ボーナス月加算金額（<?= $bonustimes ?>回）</dt>
<dd>¥<?= number_format($get['bonuspayment']) ?></dd>
<dt class="odd">分割払い手数料</dt>
<dd class="odd">¥<?= number_format($interest) ?></dd>
<dt>ローンお支払い総額</dt>
<dd>¥<?= number_format($total) ?></dd>
<!-- std -->

<?php break; ?>

<?php case "sup": ?>

<!-- sup -->
<dt class="odd">ローン元金</dt>
<dd class="odd">¥<?= number_format($loanprincipal) ?></dd>
<dt>初回お支払い額</dt>
<dd>¥<?= number_format($firstpayment) ?></dd>
<dt class="odd">2回目以降お支払い額（<?= $get['installments'] - 1 ?>回）</dt>
<dd class="odd">¥<?= number_format($monthlypayment) ?></dd>
<dt>ボーナス月加算金額（<?= $bonustimes ?>回）</dt>
<dd>¥<?= number_format($get['bonuspayment']) ?></dd>
<dt class="odd">分割払い手数料</dt>
<dd class="odd">¥<?= number_format($interest) ?></dd>
<dt>ローンお支払い総額</dt>
<dd>¥<?= number_format($total) ?></dd>
<!-- sup -->

<?php break; ?>

<?php case "als": ?>

<!-- als -->
<dt class="odd">消費税抜き月額リース料</dt>
<dd class="odd">¥<?= number_format($leasingprice) ?></dd>
<?php if($get['bonuspayment'] > 0){ ?>
<dt>ボーナス月加算金額（<?= $bonustimes ?>回）</dt>
<dd>¥<?= number_format($get['bonuspayment']) ?></dd>
<?php } ?>
<dt>残価</dt>
<dd>¥<?= number_format($get['lastpayment']) ?></dd>
<dt class="odd">リース料総額</dt>
<dd class="odd">¥<?= number_format($monthlypayment * $get['installments']) ?></dd>
<dt>消費税抜きリース料総額</dt>
<dd>¥<?= number_format($leasingprice * $get['installments']) ?></dd>
<!-- als -->

<?php break; ?>
<!-- 2012.02.06 add by morita -->
<?php case "cls": ?>

<!-- cls -->
<dt class="odd">消費税抜き月額リース料</dt>
<dd class="odd">¥<?= number_format($leasingprice) ?></dd>
<?php if($get['bonuspayment'] > 0){ ?>
<dt>ボーナス月加算金額（<?= $bonustimes ?>回）</dt>
<dd>¥<?= number_format($get['bonuspayment']) ?></dd>
<?php } ?>
<dt>リース料総額</dt>
<dd>¥<?= number_format($monthlypayment * $get['installments']) ?></dd>
<dt class="odd">消費税抜きリース料総額</dt>
<dd class="odd">¥<?= number_format($leasingprice * $get['installments']) ?></dd>
<!--
<dt>残価</dt>
<dd>¥<?= number_format($get['lastpayment']) ?></dd>
-->
<!-- cls -->

<?php break; ?>
<?php } ?>
<?php 
$financeProductName = '';
$financeProductCode = '';
$instalmentsMonths = '';
$chk = false;
$alsChk = false;
switch($plan){
	case 'wp' :
		$financeProductName = 'ウェルカムプラン';
		$financeProductCode = 'WP';
		$instalmentsMonths = $term-1;
		$term = $term+1;
		$chk=true;
		break;
	case 'std' :
		$financeProductName = 'スタンダードローン';
		$financeProductCode = 'STD';
		$instalmentsMonths = $term-1;
		$chk=true;
		break;
	case 'als' :
		$financeProductName = 'オープンエンドリース';
		$financeProductCode = 'ALS';
		$instalmentsMonths = '';
		$alsChk = true;
		
		$chk=true;
		break;
}
if($chk):
?>
<?php if($CA_Flag == '1'):?>
<br />
<form method="post" action="<?= $URL ?>" target="_blank"><!--  http://www.mercedes-benz.jp/member/ -->
<input type="hidden" name="brand" value="<?= (strpos($carArr['Car']['classname'], 'smart') !== false)?'smart':'MB'; ?>" >
<input type="hidden" name="model" value="<?= $carArr['Car']['SWT_code'] ?>" >
<input type="hidden" name="type" value="<?= $carArr['Car']['carname'] ?>">
<input type="hidden" name="listPrice" value="<?= $carArr['Car']['pricetax'] ?>">
<input type="hidden" name="optionAccessories" value="<?= $optionAccessories ?>">
<input type="hidden" name="miscellaneous" value="<?= $miscellaneous ?>">
<input type="hidden" name="totalPrice" value="<?= $totalPrice ?>">
<input type="hidden" name="cashPayment" value="<?= $cashPayment ?>">
<input type="hidden" name="loanLease" value="<?= ($plan == 'wp' || $plan == 'std')?0:1; ?>" >

<input type="hidden" name="financeProductName" value="<?= $financeProductName ?>" >
<input type="hidden" name="financeProductCode" value="<?= $financeProductCode ?>" >
<input type="hidden" name="interestRate" value="<?= $rate ?>" >
<input type="hidden" name="term" value="<?= $term ?>" >
<input type="hidden" name="deferredPaymentResidualValue" value="<?= $deferredPaymentResidualValue ?>" >
<input type="hidden" name="bonusPayment" value="<?= $bonusPayment ?>" >
<input type="hidden" name="bonusPayment" value="<?= $bonusPayment ?>" >
<?php if(!$alsChk):?>
<input type="hidden" name="bonusTimes" value="<?= $bonusTimes ?>" >
<input type="hidden" name="loanPrincipal" value="<?= $loanPrincipal ?>" >
<input type="hidden" name="loanMonthlyPayment" value="<?= $loanPrincipal - $deferredPaymentResidualValue ?>" >
<input type="hidden" name="loanDeferredPayment" value="<?= $deferredPaymentResidualValue ?>" >
<input type="hidden" name="firstPayment" value="<?= $firstpayment ?>" >
<input type="hidden" name="monthlyPayment" value="<?= $monthlypayment ?>" >
<input type="hidden" name="instalmentsMonths" value="<?= $instalmentsMonths ?>" >
<input type="hidden" name="defferePaymentLastMonth" value="<?= $deferredPaymentResidualValue ?>" >
<input type="hidden" name="translationTotalInterest" value="<?= $translationTotalInterest ?>" >
<input type="hidden" name="translationTotalPayments" value="<?= $translationTotalPayments ?>" >
<input type="hidden" name="translationMonthlyPayment" value="<?= $translationMonthlyPayment ?>" >
<input type="hidden" name="translationDeferredPayment" value="<?= $translationDeferredPayment ?>" >
<input type="hidden" name="amountPayable" value="<?= $translationTotalPayments+$cashPayment ?>" >
<?php endif;?>
<input type="hidden" name="leaseMonthlyPayment" value="<?= $leaseMonthlyPayment ?>" >
<input type="hidden" name="maintenancePlus" value="<?= $maintenancePlus ?>" >
<input type="hidden" name="insurancePlus" value="<?= $insurancePlus ?>" >

<input type="hidden" name="mbOnlinecode" value="<?= $mbOnlinecode ?>">
<input type="hidden" name="viaFlag" value="<?= $viaFlag ?>">

<button id="ca_btn">
<img src="<?= CAKEPHP_URL ?>/img/ca_button.jpg" border="0" />
</button>
</form>
<?php endif;?>
<?php endif;?>

<?php if($plan=="wp"): ?>
<?php if($cam>0 && $cam<8): ?>
<!-- MB 限定車ページ用注意書き -->
<!--<span id="smallcaption">● 特別金利1.90％は『プレミアムブランドNo.1 キャンペーン 10万円分(税込)クーポン』をはじめとする他のキャンペーン／クーポンとの併用はできません。（但し、ANAクーポンは除く。）</span>-->
<br/><span id="smallcaption">※ メンテナンスプラスと保証プラスの合計金額が初期表示されています。</span>
<?php elseif($cam==8 || $cam==9 || $cam==10 || $cam==11 || $cam==12 || $cam==13): ?>
<!-- smart 限定車ページ用注意書き -->
<br/><span id="smallcaption">※ サービスプログラムの合計金額が初期表示されています。</span><br />
<?php endif; ?>
<?php endif; ?>
<!-- 通常金利との差額表示廃止 2014.06.30 -->
<!-- 諸経費がゼロの場合の注意事項追加 2011.11.21 by morita -->
<?php if($get['taxtotal'] == 0){ ?>
<span id="smallcaption"> 諸経費は含まれておりません。</span>
<?php } ?>
<?php if($plan=="als" || $plan=="cls"): ?>
<!-- <br/><span id="reduce_automobiletax">自動車税の減税には対応しておりません</span> -->
<?php endif; ?>
<?php if($plan=="als"): ?>
 <br/><span id="smallcaption">特別金利の場合には再リースのお取り扱いはできません。</span><br />
 <span id="caption">月額リース料につきましては、実質年率をベースに計算し、端数を100円単位で切り上げ処理しております。</span> 
<?php endif; ?>
<input type="hidden" id="pdfid" value="<?= $pdfid ?>" />
<input type="hidden" id="logid" value="<?= $logid ?>" />
<!--
<div id="estimate"><a href="../pdf/estimate/<?= $logid ?>" target="_blank"><button>PDF出力</button></a></div>
-->
</dl>
<?php endif; ?>