<?php

namespace APP\Controller;
use \PDO;

class BackupController
{
    public static function Export_Backup()
    {
        $reparticao = "C:";

        exec("$reparticao");

        if(!is_dir("$reparticao/Backup"))
        {
            exec("md Backup");
        }

        if(file_exists("$reparticao/Backup/Export/Exportar.bat"))
        {

            exec("$reparticao/Backup/Export/Exportar.bat");

            header("Location: /");
        }
        else
        {
            if(file_exists(BASEDIR . "APP/Controller/Assets/Exportar.bat"))
            {

                exec(BASEDIR . "APP/Controller/Assets/Exportar.bat");

                header("Location: /");

            }
            else
            {
            exec($reparticao . '/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -hlocalhost -P3306 -uroot -petecjau cadastroveiculo --databases > ' . $reparticao . '/Backup/Backup_Full.sql');
            exec($reparticao . '/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -hlocalhost -P3306 -uroot -petecjau cadastroveiculo --no-data --databases > ' . $reparticao . '/Backup/Backup_Structure.sql');
            exec($reparticao . '/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -hlocalhost -P3306 -uroot -petecjau cadastroveiculo --no-create-info --databases > ' . $reparticao . '/Backup/Backup_Data.sql');
            header("Location: /");
            }
        }

    }

    public static function Import_Backup()
    {
        $reparticao = "C:";

        exec("$reparticao");

        if(is_dir("$reparticao/Backup"))
        {

            if(file_exists("$reparticao/Backup/Backup_Full.sql"))
            {

                if(is_dir("$reparticao/Backup/Import"))
                {

                    if(file_exists("$reparticao/Backup/Import/Importar.bat"))
                    {

                        exec("$reparticao/Backup/Import/Importar.bat");

                        header("Location: /");

                    }

                    else
                    {

                        exit("Arquivo de importação de backup não encontrado.");

                    }

                }

                else
                {

                    if(file_exists(BASEDIR . "APP/Controller/Assets/Importar.bat"))
                    {

                        exec(BASEDIR . "APP/Controller/Assets/Importar.bat");

                        header("Location: /");

                    }

                    else
                    {

                        exec('cd ' . $reparticao . '/"Program Files"/MySQL/"MySQL Server 8.0"/bin');
                    
                        exec("mysql -hlocalhost -P3306 -uroot -petecjau < C:\Backup\Backup_Full.sql");

                        header("Location: /");

                    }

                }
    
            }

            else
            {

                exit("Arquivo de backup não encontrado!");

            }

        }

        else
        {

            exit("Pasta de backup não encontrada!");

        }

    }

}
    