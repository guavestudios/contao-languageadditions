<?php

namespace Languageadditions\Classes;

use Contao;

class LanguageInsertTags extends \Frontend {

	public function replacePageAliasInsertTag($tag) {
		$arr = explode('::', $tag);

		if($arr[0] != 'insert_lang_page_url') {
			return false;
		}
		if(isset($arr[1])) {
			$param = $arr[1];

			$currentPageLang = $GLOBALS['TL_LANGUAGE'];
			$pageLink = $currentPageLang . '/';


			if(is_string($param) && !is_numeric($param)) {
				$alias = $param;

				if($currentPageLang == 'de') {
					$pageLink .= $alias;
				} else {
					$parentPage = \PageModel::findBy(
						array('language=?', 'alias=?'),
						array('de', $alias)
					);
					$pageLinkModel = \PageModel::findBy('languageMain', $parentPage->id);
					$pageLink .= $pageLinkModel->alias;
				}
				return $pageLink;
			}
			if(is_numeric($param)) {
				$id = $param;
				if($currentPageLang == 'de') {
					$pageLinkModel = \PageModel::findBy('id', $id);
				} else {
					$pageLinkModel = \PageModel::findBy('languageMain', $id);
				}
				$pageLink .= $pageLinkModel->alias;
				return $pageLink;
			}
		}

	}

}
