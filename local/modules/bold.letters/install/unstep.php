<?php if (!check_bitrix_sessid()) return;

use \Bitrix\Main\Localization\Loc;

echo CAdminMessage::ShowNote(Loc::GetMessage("UNINSTALL_STEP"));
