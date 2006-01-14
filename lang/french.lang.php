<?php
/*
        #################################################################
        # >>> PHPSurveyor                                               #
        #################################################################
        # > Author:  Jason Cleeland                                     #
        # > E-mail:  jason@cleeland.org                                 #
        # > Mail:    Box 99, Trades Hall, 54 Victoria St,               #
        # >          CARLTON SOUTH 3053, AUSTRALIA                      #
        # > Date:        20 February 2003                               #
        #                                                               #
        # This set of scripts allows you to develop, publish and        #
        # perform data-entry on surveys.                                #
        #################################################################
        #       Copyright (C) 2003  Jason Cleeland                      #
        #                                                               #
        # This program is free software; you can redistribute           #
        # it and/or modify it under the terms of the GNU General        #
        # Public License as published by the Free Software              #
        # Foundation; either version 2 of the License, or (at your      #
        # option) any later version.                                    #
        #                                                               #
        # This program is distributed in the hope that it will be       #
        # useful, but WITHOUT ANY WARRANTY; without even the            #
        # implied warranty of MERCHANTABILITY or FITNESS FOR A          #
        # PARTICULAR PURPOSE.  See the GNU General Public License       #
        # for more details.                                             #
        #                                                               #
        # You should have received a copy of the GNU General            #
        # Public License along with this program; if not, write to      #
        # the Free Software Foundation, Inc., 59 Temple Place -         #
        # Suite 330, Boston, MA  02111-1307, USA.                       #
        #################################################################
        # This language file kindly provided by François Tissandier     #
        # and corrected by Pascal Bastien 20/07/2004                    #
        # Version 1.3                                                   #
        #                                                               #
        # Version 1.5.0 - corrected by Sébastien GAUGRY                 #
        # IMPORTANT for  translators : ' is &#0027;                     #
        # Do not use named chars except for above. Use an UTF-8 editor. #
        #################################################################
*/
//SINGLE WORDS
define("_YES", "Oui");
define("_NO", "Non");
define("_UNCERTAIN", "Indifférent");
define("_ADMIN", "Administrateur");
define("_TOKENS", "Invitations");
define("_FEMALE", "Femme");
define("_MALE", "Homme");
define("_NOANSWER", "Sans réponse");
define("_NOTAPPLICABLE", "N/A"); //New for 0.98rc5
define("_OTHER", "Autre");
define("_PLEASECHOOSE", "Veuillez choisir");
define("_ERROR_PS", "Erreur");
define("_COMPLETE", "Terminé");
define("_INCREASE", "Augmenter"); //NEW WITH 0.98
define("_SAME", "Sans Changement"); //NEW WITH 0.98
define("_DECREASE", "Diminuer"); //NEW WITH 0.98
define("_REQUIRED", "<font color='red'>* </font>"); //NEW WITH 0.99dev01
//from questions.php
define("_CONFIRMATION", "Confirmation");
define("_TOKEN_PS", "Invitation");
define("_CONTINUE_PS", "Continuer");

//BUTTONS
define("_ACCEPT", "Accepter");
define("_PREV", "Précédent");
define("_NEXT", "Suivant");
define("_LAST", "Fin");
define("_SUBMIT", "Envoyer");


//MESSAGES
//From QANDA.PHP
define("_CHOOSEONE", "Veuillez sélectionner une réponse ci-dessous");
define("_ENTERCOMMENT", "Veuillez saisir votre commentaire ici");
define("_NUMERICAL_PS", "Seuls les chiffres sont autorisés pour ce champ");
define("_CLEARALL", "Sortir et effacer ce questionnaire");
define("_MANDATORY", "Cette question est obligatoire");
define("_MANDATORY_PARTS", "Veuillez compléter toutes les parties SVP");
define("_MANDATORY_CHECK", "Veuillez choisir au moins un élément SVP");
define("_MANDATORY_RANK", "Veuillez classer tous les éléments SVP");
define("_MANDATORY_POPUP", "Vous n'avez pas répondu à une ou plusieurs questions obligatoires. Vous ne pouvez pas enregistrer vos réponses au questionnaire tant que vous n'avez répondu à celles-ci"); //NEW in 0.98rc4
define("_VALIDATION", "Vous devez répondre correctement &agrave; cette question"); //NEW in VALIDATION VERSION
define("_VALIDATION_POPUP", "Vous n&#0027;avez pas répondu correctement &agrave; une ou plusieurs questions. Vous ne pouvez pas continuer tant que ces réponses ne sont pas valides"); //NEW in VALIDATION VERSION
define("_DATEFORMAT", "Format : AAAA-MM-JJ");
define("_DATEFORMATEG", "(ex : 2003-12-25 pour No&euml;l)");
define("_REMOVEITEM", "Enlever cet élément");
define("_RANK_1", "Cliquez sur un élément dans la liste de gauche ci-dessous.");
define("_RANK_2", "Choisissez l&acute;élément le plus important pour finir par le moins important.");
define("_YOURCHOICES", "Vos choix");
define("_YOURRANKING", "Votre classement");
define("_RANK_3", "Cliquer sur les ciseaux &agrave; droite de chaque élément");
define("_RANK_4", "pour enlever le dernier élément de votre classement");
//From INDEX.PHP
define("_NOSID", "Vous n&acute;avez pas fourni d&acute;identifiant de questionnaire");
define("_CONTACT1", "Veuillez contacter");
define("_CONTACT2", "pour plus d&#0027;aide");
define("_ANSCLEAR", "Réponses effacées");
define("_RESTART", "Recommencer ce questionnaire");
define("_CLOSEWIN_PS", "Fermer cette fen&ecirc;tre");
define("_CONFIRMCLEAR", "Etes-vous s&ucirc;r de vouloir effacer toutes les réponses ?");
define("_CONFIRMSAVE", "Etes-vous s&ucirc;r de vouloir sauvegarder vos réeacute;ponses ?");
define("_EXITCLEAR", "Sortir et effacer le questionnaire");
//From QUESTION.PHP
define("_BADSUBMIT1", "Impossible d&#0027;envoyer les réponses car il n&#0027;y en a aucune (vide).");
define("_BADSUBMIT2", "Cette erreur peut se produire si vous avez déj&agrave; envoyé vos réponses et actualisé la page de votre naviguateur avec \"Actualiser\". Dans ce cas, vos réponses ont déj&agrave; été sauvées.");
define("_NOTACTIVE1", "Vos réponses n&#0027;ont pas été enregistrées. Ce questionnaire n&acute;est pas encore activé.");
define("_CLEARRESP", "Effacer les réponses");
define("_THANKS", "Merci");
define("_SURVEYREC", "Vos réponses ont été enregistrées.");
define("_SURVEYCPL", "Questionnaire complété");
define("_DIDNOTSAVE", "Non sauvegardé");
define("_DIDNOTSAVE2", "Une erreur non prévue s&#0027;est produite et vos réponses n&#0027;ont pas pu &ecirc;tre sauvées.");
define("_DIDNOTSAVE3", "Vos réponses n&#0027;ont pas été perdues et ont été mailées &agrave; l&#0027;administrateur du questionnaire qui les saisira ultérieurement dans la base de données.");
define("_DNSAVEEMAIL1", "Une erreur s&#0027;est produite pendant la sauvegarde d&#0027;une réponse");
define("_DNSAVEEMAIL2", "DONNEES A SAISIR");
define("_DNSAVEEMAIL3", "CODE SQL QUI A ECHOUE");
define("_DNSAVEEMAIL4", "MESSAGE D&#0027;ERREUR");
define("_DNSAVEEMAIL5", "ERREUR DE SAUVEGARDE");
define("_SUBMITAGAIN", "Essayez d&#0027;envoyer &agrave; nouveau");
define("_SURVEYNOEXIST", "Désolé. Il n&#0027;y a pas de questionnaire correspondant.");
define("_NOTOKEN1", "C&#0027;est un questionnaire privé. Vous devez avoir une invitation pour y participer.");
define("_NOTOKEN2", "Si vous avez re&ccedil;u une invitation, saisissez-la dans le champ ci-dessous et cliquez sur Continuer.");
define("_NOTOKEN3", "L&#0027;invitation que vous avez re&ccedil;ue n&#0027;est pas valide, ou a déj&agrave; été utilisée.");
define("_NOQUESTIONS", "Ce questionnaire n&#0027;a pas encore de question et ne peut &ecirc;tre testé ou finalisé.");
define("_FURTHERINFO", "Pour plus d&#0027;informations veuillez contacter");
define("_NOTACTIVE", "Ce questionnaire n&#0027;est pas activé. Vous ne pourrez pas sauver vos réponses.");
define("_SURVEYEXPIRED", "Ce questionnaire n&#0027;est plus disponible."); //NEW for 098rc5

define("_SURVEYCOMPLETE", "Vous avez déj&agrave; complété ce questionnaire.");

define("_INSTRUCTION_LIST", "Veuillez sélectionner seulement une réponse ci-dessous"); //NEW for 098rc3
define("_INSTRUCTION_MULTI", "Cochez la ou les réponses"); //NEW for 098rc3

define("_CONFIRMATION_MESSAGE1", "Questionnaire envoyé"); //NEW for 098rc5
define("_CONFIRMATION_MESSAGE2", "Une nouvelle réponse a été saisie dans votre questionnaire"); //NEW for 098rc5
define("_CONFIRMATION_MESSAGE3", "Cliquez sur le lien suivant pour voir votre réponse personnelle"); //NEW for 098rc5
define("_CONFIRMATION_MESSAGE4", "Visualiser les statistiques en cliquant ici"); //NEW for 098rc5
define("_CONFIRMATION_MESSAGE5", "Cliquez sur le lien suivant pour éditer cette réponse :"); //NEW for 0.99stable

define("_PRIVACY_MESSAGE", "<strong><i>Note sur la protection de la vie privée</i></strong><br />"
                                                  ."Ce questionnaire est anonyme.<br />"
                                                  ."Les enregistrements conservés de votre questionnaire ne contiennent aucune "
                                                  ."information d&#0027;identification &agrave; moins bien s&ucirc;r qu&#0027;une question  "
                                                  ."sur votre identité ait été posée dans le questionnaire. Si vous avez répondu &agrave; "
                                                  ."un questionnaire utilisant une invitation pour vous permettre d&#0027;y accéder, "
                                                  ."vous pouvez &ecirc;tre assuré que cet identifiant. "
                                                  ."n&#0027;est pas conservé avec vos réponses. Il est geré dans une base de données séparée "
                                                  ."et ne pourra pas &ecirc;tre mis &agrave; jour pour indiquer que vous "
                                                  ."avez complété ce questionnaire. Il n&#0027;y a aucun moyen pour faire correspondre "
                                                  ."les invitations avec les réponses au questionnaire."); //New for 0.98rc9

define("_THEREAREXQUESTIONS", "Il y a {NUMBEROFQUESTIONS} questions dans ce questionnaire."); //New for 0.98rc9 Must contain {NUMBEROFQUESTIONS} which gets replaced with a question count.
define("_THEREAREXQUESTIONS_SINGLE", "Il y a 1 question dans ce questionnaire."); //New for 0.98rc9 - singular version of above

define ("_RG_REGISTER1", "Vous devez &ecirc;tre enregistré pour répondre &agrave; ce questionnaire"); //NEW for 0.98rc9
define ("_RG_REGISTER2", "Vous devez &ecirc;tre enregistré pour ce questionnaire si vous désirez y participer.<br />\n"
                                                ."Saisissez vos coordonnées ci-dessous, et un mail contenant le lien pour "
                                                ."participer &agrave; ce questionnaire vous sera immédiatement envoyé."); //NEW for 0.98rc9
define ("_RG_EMAIL", "Adresse mail"); //NEW for 0.98rc9
define ("_RG_FIRSTNAME", "Nom"); //NEW for 0.98rc9
define ("_RG_LASTNAME", "Prénom"); //NEW for 0.98rc9
define ("_RG_INVALIDEMAIL", "L&#0027;adresse mail utilisée n&#0027;est pas valide. Veuillez reéssayer.");//NEW for 0.98rc9
define ("_RG_USEDEMAIL", "L&#0027;adresse mail utilis&eacutee; a déj&agrave; été enregistré.");//NEW for 0.98rc9
define ("_RG_EMAILSUBJECT", "Confirmation d&#0027;enregistrement de {SURVEYNAME}");//NEW for 0.98rc9
define ("_RG_REGISTRATIONCOMPLETE", "Merci de vous enregistrer pour participer &agrave; ce questionnaire.<br /><br />\n"
                                                                   ."Un mail a été envoyé &agrave; l&#0027;adresse que vous avez fournie dans les détails d&#0027;accés "
                                                                   ."pour ce questionnaire. Veuillez suivre le lien dans ce mail pour participer.<br /><br />\n"
                                                                   ."Administrateur du questionnaire {ADMINNAME} ({ADMINEMAIL})");//NEW for 0.98rc9

define("_SM_COMPLETED", "<strong>Merci<br /><br />"
					   ."Vous venez de répondre &agrave; l&#0027;ensemble des questions de ce questionnaire.</strong><br /><br />"
					   ."Veuillez cliquer sur le bouton ["._SUBMIT."], afin de procéder &agrave; l&#0027;enregistrement de vos réponses."); //New for 0.98finalRC1
define("_SM_REVIEW", "Si vous souhaitez vérifier ou changer certaines de vos réponses, "
					."vous pouvez le faire en cliquant sur le bouton ["._PREV."] en bas de cette page, "
					."afin de passer en revue vos réponses.");
					
//For the "printable" survey
define("_PS_CHOOSEONE", "Choisissez <strong>seulement une</strong> des réponses suivantes :"); //New for 0.98finalRC1
define("_PS_WRITE", "Ecrivez votre réponse ici :"); //New for 0.98finalRC1
define("_PS_CHOOSEANY", "Choisissez <strong>toutes</strong> les réponses qui conviennent :"); //New for 0.98finalRC1
define("_PS_CHOOSEANYCOMMENT", "Choisissez toutes les réponses qui conviennent et laissez un commentaire :"); //New for 0.98finalRC1
define("_PS_EACHITEM", "Choisissez la réponse appropriée pour chaque élément :"); //New for 0.98finalRC1
define("_PS_WRITEMULTI", "Ecrivez votre réponse ici :"); //New for 0.98finalRC1
define("_PS_DATE", "Entrez une date :"); //New for 0.98finalRC1
define("_PS_COMMENT", "Faites le commentaire de votre choix ici :"); //New for 0.98finalRC1
define("_PS_RANKING", "Numérotez chaque case dans l&#0027;ordre de vos préférences de 1 &agrave;"); //New for 0.98finalRC1
define("_PS_SUBMIT", "Envoyer votre questionnaire."); //New for 0.98finalRC1
define("_PS_THANKYOU", "Merci d&#0027;avoir complété ce questionnaire."); //New for 0.98finalRC1
define("_PS_FAXTO", "SVP faxez ce questionnaire rempli &agrave; :"); //New for 0.98finaclRC1

define("_PS_CON_ONLYANSWER", "Répondez &agrave; cette question"); //New for 0.98finalRC1
define("_PS_CON_IFYOU", "si vous avez répondu"); //New for 0.98finalRC1
define("_PS_CON_JOINER", "et"); //New for 0.98finalRC1
define("_PS_CON_TOQUESTION", "&agrave; la  question"); //New for 0.98finalRC1
define("_PS_CON_OR", "ou"); //New for 0.98finalRC2

//Save Messages
define("_SAVE_AND_RETURN", "Sauvegarder vos réponses et continuer le questionnaire");
define("_SAVEHEADING", "Sauvegarde des réponses partielles");
define("_RETURNTOSURVEY", "Retourner au questionnaire");
define("_SAVENAME", "Nom");
define("_SAVEPASSWORD", "Mot de passe");
define("_SAVEPASSWORDRPT", "Répétez le mot de passe");
define("_SAVE_EMAIL", "Votre adresse mail");
define("_SAVEEXPLANATION", "Entrez un nom et un mot de passe pour ce questionnaire et cliquez sur Sauvegarder en bas.<br />\n"
				  ."Vos réponses au questionnaire seront sauvegardées en utilisant ce nom et ce mot de passe, et pourront "
				  ."&ecirc;tre complétées plus tard en vous connectant avec ce nom et ce mot de passe.<br /><br />\n"
				  ."Si vous donnez une adresse mail, un mail contenant ces détails vous sera envoyé");
define("_SAVESUBMIT", "Sauvegarder maintenant");
define("_SAVENONAME", "Vous devez fournir un nom pour sauvegarder vos réponses &agrave; ce questionnaire.");
define("_SAVENOPASS", "Vous devez fournir un mot de passe pour sauvegarder vos réponses &agrave; ce questionnaire.");
define("_SAVENOPASS2", "Vous devez entrer de nouveau le mot de passe pour cette sauvegarde.");
define("_SAVENOMATCH", "Vos mots de passe ne correspondent pas.");
define("_SAVEDUPLICATE", "Ce nom a déj&agrave; été utilisé pour ce questionnaire. Vous devez en choisir un autre.");
define("_SAVETRYAGAIN", "Essayer encore SVP.");
define("_SAVE_EMAILSUBJECT", "Détails sur le questionnaire que vous avez sauvegardé");
define("_SAVE_EMAILTEXT", "Vous, ou quelqu&#0027;un utilisant votre adresse mail, a sauvegardé "
						 ."ses réponses partielles &agrave; un questionnaire. Les informations suivantes peuvent &ecirc;tre utilisées "
						 ."pour retourner &agrave; ce questionnaire et le continuer o&ugrave; vous en étiez.");
define("_SAVE_EMAILURL", "Rechargez votre questionnaire en cliquant sur l&#0027;URL suivante :");
define("_SAVE_SUCCEEDED", "Vos réponses &agrave; ce questionnaire ont ét&eacute, sauvegardées avec succ&egrave;s");
define("_SAVE_FAILED", "Une erreur est survenue et vos réponses n&#0027;ont pas été sauvegardées.");
define("_SAVE_EMAILSENT", "Un mail vous a été envoyé avec les détails de ce questionnaire.");

//Load Messages
define("_LOAD_SAVED", "Chargement des réponses déj&agrave; enregistrées pour ce questionnaire");
define("_LOADHEADING", "Chargement d&#0027;un questionnaire précédemment sauvegardé");
define("_LOADEXPLANATION", "Vous pouvez charger un questionnaire que vous avez précédemment sauvegardé depuis cet écran.<br />\n"
			  ."Entrez le nom et le mot de passe utilisés lors de la sauvegarde.<br /><br />\n");
define("_LOADNAME", "Nom");
define("_LOADPASSWORD", "Mot de passe");
define("_LOADSUBMIT", "Charger maintenant");
define("_LOADNONAME", "Vous n&#0027;avez pas fourni de nom");
define("_LOADNOPASS", "Vous n&#0027;avez pas fourni de mot de passe");
define("_LOADNOMATCH", "Pas de questionnaire correspondant enregistré");

define("_ASSESSMENT_HEADING", "Votre évaluation");
?>