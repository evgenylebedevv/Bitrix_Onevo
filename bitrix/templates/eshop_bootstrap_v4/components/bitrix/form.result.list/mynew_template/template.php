<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>
<?php
$status = "2";   // ID статуса Ответ.
$ques_count = "10";  // параметр постраничной навигации.
?>
<script>
    <!--
    function Form_Filter_Click_<?=$arResult["filter_id"]?>() {
        var sName = "<?=$arResult["tf_name"]?>";
        var filter_id = "form_filter_<?=$arResult["filter_id"]?>";
        var form_handle = document.getElementById(filter_id);

        if (form_handle) {
            if (form_handle.className != "form-filter-none") {
                form_handle.className = "form-filter-none";
                document.cookie = sName + "=" + "none" + "; expires=Fri, 31 Dec 2030 23:59:59 GMT;";
            } else {
                form_handle.className = "form-filter-inline";
                document.cookie = sName + "=" + "inline" + "; expires=Fri, 31 Dec 2030 23:59:59 GMT;";
            }
        }
    }

    //-->
</script>
<p>
    <?= ($arResult["is_filtered"] ? "<span class='form-filteron'>" . GetMessage("FORM_FILTER_ON") : "<span class='form-filteroff'>" . GetMessage("FORM_FILTER_OFF")) ?></span>&nbsp;&nbsp;&nbsp;
    [ <a href="javascript:void(0)"
         OnClick="Form_Filter_Click_<?= $arResult["filter_id"] ?>()"><?= GetMessage("FORM_FILTER") ?></a> ]
</p>
<form name="form1" method="GET"
      action="<?= $APPLICATION->GetCurPageParam("", array("sessid", "delete", "del_id", "action"), false) ?>?"
      id="form_filter_<?= $arResult["filter_id"] ?>" class="form-filter-<?= htmlspecialcharsbx($arResult["tf"]); ?>">
    <input type="hidden" name="WEB_FORM_ID" value="<?= $arParams["WEB_FORM_ID"] ?>"/>
    <? if ($arParams["SEF_MODE"] == "N"): ?><input type="hidden" name="action" value="list"/><? endif ?>
    <table class="form-filter-table data-table">
        <thead>
        <tr>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        <?
        if (strlen($arResult["str_error"]) > 0) {
            ?>
            <tr>
                <td class="errortext" colspan="2"><?= $arResult["str_error"] ?></td>
            </tr>
            <?
        } // endif (strlen($str_error) > 0)
        ?>
        <tr>
            <td><?= GetMessage("FORM_F_DATE_CREATE") . " (" . CSite::GetDateFormat("SHORT") . "):" ?></td>
            <td><?= CForm::GetDateFilter("date_create", "form1", "Y", "", "") ?></td>
        </tr>

        <?
        if (is_array($arResult["arrFORM_FILTER"]) && count($arResult["arrFORM_FILTER"]) > 0)
        {
        foreach ($arResult["arrFORM_FILTER"] as $arrFILTER)
        {
        $prev_fname = "";

        foreach ($arrFILTER

        as $arrF)
        {
        if ($arParams["SHOW_ADDITIONAL"] == "Y" || $arrF["ADDITIONAL"] != "Y")
        {
        $i++;
        if ($arrF["SID"] != $prev_fname)
        {
        if ($i > 1) {
            ?>
            </td>
            </tr>
            <?
        } //endif($i>1);
        ?>
        <tr>
            <td>
                <?= $arrF["FILTER_TITLE"] ? $arrF['FILTER_TITLE'] : $arrF['TITLE'] ?>
                <?= ($arrF["FILTER_TYPE"] == "date" ? " (" . CSite::GetDateFormat("SHORT") . ")" : "") ?>
            </td>
            <td>
                <?
                } //endif ($fname!=$prev_fname) ;
                ?>
                <?
                switch ($arrF["FILTER_TYPE"]) {
                    case "text":
                        echo CForm::GetTextFilter($arrF["FID"]);
                        break;
                    case "date":
                        echo CForm::GetDateFilter($arrF["FID"]);
                        break;
                    case "integer":
                        echo CForm::GetNumberFilter($arrF["FID"]);
                        break;
                    case "dropdown":
                        echo CForm::GetDropDownFilter($arrF["ID"], $arrF["PARAMETER_NAME"], $arrF["FID"]);
                        break;
                    case "exist":
                        ?>
                        <?= CForm::GetExistFlagFilter($arrF["FID"]) ?>
                        <?= GetMessage("FORM_F_EXISTS") ?>
                        <?
                        break;
                } // endswitch
                ?>
                <?
                if ($arrF["PARAMETER_NAME"] == "ANSWER_TEXT") {
                    ?>
                    [<span class='form-anstext'>...</span>]
                    <?
                } elseif ($arrF["PARAMETER_NAME"] == "ANSWER_VALUE") {
                    ?>
                    (<span class='form-ansvalue'>...</span>)
                    <?
                }
                ?>
                <br/>
                <?
                $prev_fname = $arrF["SID"];
                } //endif (($arrF["ADDITIONAL"]=="Y" && $SHOW_ADDITIONAL=="Y") || $arrF["ADDITIONAL"]!="Y");

                } // endwhile (list($key, $arrF) = each($arrFILTER));

                } // endwhile (list($key, $arrFILTER) = each($arrFORM_FILTER));
                } // endif(is_array($arrFORM_FILTER) && count($arrFORM_FILTER)>0);
                ?></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th colspan="2">
                <input type="submit" name="set_filter" value="<?= GetMessage("FORM_F_SET_FILTER") ?>"/><input
                        type="hidden" name="set_filter" value="Y"/> <input type="submit" name="del_filter"
                                                                           value="<?= GetMessage("FORM_F_DEL_FILTER") ?>"/>
            </th>
        </tr>
        </tfoot>
    </table>
</form>
<br/>

<?
if ($arParams["can_delete_some"]) {
    ?>
    <?
} //endif($can_delete_some);

if ($arResult["FORM_ERROR"] <> '') ShowError($arResult["FORM_ERROR"]);
if ($arResult["FORM_NOTE"] <> '') ShowNote($arResult["FORM_NOTE"]);
?>
<p>
    <b><a href="<?= $arParams["NEW_URL"] ?><?= $arParams["SEF_MODE"] != "Y" ? (mb_strpos($arParams["NEW_URL"], "?") === false ? "?" : "&") . "WEB_FORM_ID=" . $arParams["WEB_FORM_ID"] : "" ?>"><?= GetMessage("FORM_NEW_QUESTION") ?>
            &nbsp;&nbsp;&gt;&gt;</a></b>
</p>
<form name="rform_<?=$arResult["filter_id"]?>" method="post" action="<?=POST_FORM_ACTION_URI?>#nav_start">
    <input type="hidden" name="WEB_FORM_ID" value="<?=$arParams["WEB_FORM_ID"]?>" />
    <?=bitrix_sessid_post()?>

    <?
    if ($arResult["res_counter"] > 0 && $arParams["SHOW_STATUS"] == "Y" && $arParams["F_RIGHT"] >= 15)
    {
        ?>
        <p><input type="submit" name="save" value="<?=GetMessage("FORM_SAVE")?>" /><input type="hidden" name="save" value="Y" /> <input type="reset" value="<?=GetMessage("FORM_RESET")?>" /></p>
        <?
    } //endif(intval($res_counter)>0 && $SHOW_STATUS=="Y" && $F_RIGHT>=15);
    ?>
    <p>
        <?=$arResult["pager"]?>
    </p>

    <?

    if(count($arResult["arrResults"]) > 0)
    {
        $arPerm = CFormStatus::GetPermissions($status);
        $rsContent = new CDBResult;
        $rsContent -> InitFromArray($arResult["arrResults"]);
        $rsContent -> NavStart($ques_count);
        $j=0;
        ?>
        <table class="data-table form-table">
            <?
            while ($arRes=$rsContent->Fetch())
            {
                $j++;
                $user_date = $arRes["DATE_CREATE"];
                $res_id=$arRes["ID"];
                $arAns = CFormResult::GetDataByID($res_id, array(), $arResult, $arAnswer);
                if ($j>1)
                {
                    ?>
                    <tr><td colspan="3" class="form-results-delimiter"> </td></tr>
                    <?
                }
                ?>
                <tr>
                    <td><b><?=$arAns["text"][0]["TITLE"]?></b></td><td><?=$arAns["text"][0]["USER_TEXT"]?></td>
                    <td rowspan="2"><b><?=substr($user_date,0,10)."";?></b><br/><b><?=$arAns["name"][0]["USER_TEXT"]?></b>
                        <br/>
                        <?
                        if ($arRes["STATUS_ID"]!=$status && in_array("MOVE", $arPerm) || $USER->IsAdmin())
                        {
                            $href = $arParams["SEF_MODE"] == "Y" ? str_replace("#RESULT_ID#", $arRes["ID"], $arParams["EDIT_URL"]) : $arParams["EDIT_URL"].(strpos($arParams["EDIT_URL"], "?") === false ? "?" : "&")."RESULT_ID=".$arRes["ID"]."&WEB_FORM_ID=".$arParams["WEB_FORM_ID"];
                            ?>
                            [ <a title="<?=GetMessage("FORM_EDIT_ALT")?>" href="<?=$href?>"><?=GetMessage("FORM_EDIT")?></a> ]
                            <?
                        }
                        ?>
                        <br/>
                        <?
                        if ($USER->IsAdmin())
                        {
                            $href = $arParams["LIST_URL"].(strpos($arParams["LIST_URL"], "?") === false ? "?" : "&").($arParams["SEF_MODE"] == "Y" ? "" : "WEB_FORM_ID=".$arParams["WEB_FORM_ID"]."&")."del_id=".$arRes["ID"]."&".bitrix_sessid_get()."#nav_start";
                            ?>[ <a title="<?=GetMessage("FORM_DELETE_ALT")?>" href="javascript:if(confirm('<?=GetMessage("FORM_CONFIRM_DELETE")?>')) window.location='<?=$href?>'"><?=GetMessage("FORM_DELETE")?></a> ]
                            <?
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <?
                    if ($arRes["STATUS_ID"]!=$status)
                    {
                        ?>
                        <td colspan="2"><i><?=GetMessage("FORM_NEW_ANSWER")?></i></td>
                        <?
                    }
                    else
                    {
                        ?>
                        <td><b><?=$arAns["our_answer"][0]["TITLE"]?></b></td>
                        <td><?=$arAns["our_answer"][0]["USER_TEXT"]?></td>
                        <?
                    }
                    ?>
                </tr>
                <?
            }
            ?>
        </table>
        <br />
        <?
        echo $rsContent->NavPrint('Вопросы');
    }
    ?>
</form>