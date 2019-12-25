<?php

include_once "../config/connectdb.php";
	if (isset($_POST["action"])) {
		if ($_POST["action"] == "edit") {
			// code edit
		}
		elseif ($_POST["action"] == "delete" ) {
			//code delete
		}
		else {
			//code thêm mới
			/*
			 * Định nghĩa các trường dữ liệu hợp lệ bên trong bảng books
			 *
			 * */

            $bookFields = ["book_name", "book_intro", "book_thumbnail",
                "book_image", "book_price", "book_sell", "book_author", "book_publisher",
                "created" , "updated", "book_hit", "book_buy", "book_status", "book_desc"];
            $data = [];
            $bookFieldsNotQuote = ["book_hit", "book_buy", "book_status", "book_price", "book_sell"];
            foreach($bookFields as $fieldName) {
                if (isset($_POST[$fieldName])) {
                	if (!in_array($fieldName, $bookFieldsNotQuote)) {
                        $data[$fieldName] = "'".$_POST[$fieldName]."'";
					}
					else {
                        $data[$fieldName] = $_POST[$fieldName];
					}
                }
                else {
                	if ($fieldName == "created" || $fieldName == "updated") {
						if (!in_array($fieldName,$bookFieldsNotQuote)) {
                            $data[$fieldName] = "'".date("Y-m-d H:i:s")."'";
						}
						else {
                            $data[$fieldName] =date("Y-m-d H:i:s");
						}
					}
				}
            }
            echo "<pre>";
            print_r($data);
            echo "</pre>";

            // convert mảng thành 1 chuỗi
			$fieldSQL = implode(',', $bookFields);
			$fieldValue = implode(',', $data);

			echo "<br>" . $fieldSQL;
			echo "<br>" . $fieldValue;

			$sqlInsert = "INSERT INTO books($fieldSQL) values ($fieldValue)";

			echo "<br>" . $sqlInsert;
			$insertFlag = $conn->query($sqlInsert);

			var_dump($insertFlag);
			die;

        }

	}


?>