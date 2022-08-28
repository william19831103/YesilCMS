<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_forge         $dbforge
 * @property CI_DB_query_builder $db
 */
class Migration_create_pages extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id'           => array(
                'type'           => 'INT',
                'constraint'     => '10',
                'unsigned'       => true,
                'auto_increment' => true
            ),
            'title'        => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'uri_friendly' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'description'  => array(
                'type' => 'TEXT',
                'null' => false
            ),
            'date'         => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'default'    => '0'
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('pages');

        $data = array(
            'title'        => '使用协议',
            'uri_friendly' => 'terms-of-use',
            'description'  => '<h1 id="h_6174560082761658239187001"><span style="color: #f8b700;"><a style="color: #f8b700;" title="使用条款" href="#h_6174560082761658239187001">#</a>
            《暗黑魔兽》用户使用管理条例
欢迎参加暗黑魔兽工作室大型多人同时在线角色扮演游戏“暗黑魔兽”(以下简称为“暗黑魔兽”或“本游戏”)。 暗黑魔兽的版权所有人为暗黑魔兽工作室公司，一家在中华人民共和国法律下有效成立的公司，及其供应商或授权商（以下统称为“暗黑魔兽工作室”）。暗黑魔兽已由暗黑魔兽工作室在中华人民共和国境内（不包括香港特别行政区，澳门特别行政区和台湾省）（以下简称为“区域”）独家运营。所有在区域内对暗黑魔兽的使用必须遵守本用户使用协议及今后更新版本的使用协议（以下简称为“本协议”）中的所有条款。只有经过暗黑魔兽工作室授权的根据暗黑魔兽测试协议和本协议参与暗黑魔兽测试的个人才可以进入本游戏。任何不遵守本协议约定进行本游戏的行为应是被禁止的。您必须保证您是在中华人民共和国境内的自然人且有能力自行阅读本协议并接受本协议或代表经您授权使用您游戏账号的受监护人接受本协议。您进入本游戏即表明您同意并接受本协议所有条款。若您不接受本协议任何条款，请立即退出本游戏且不要注册成为本游戏用户或进入本游戏。

1． 建立游戏账号

a. 您只可以建立一个通过暗黑魔兽工作室提供的网络服务并在遵守本协议相关条款下进行本游戏的账号。为此目的，您必须年满16周岁并具有相应民事行为能力的个人。任何公司，有限责任公司，合伙组织，或其他任何非自然人形式的法律实体不得建立账号。接受本协议，即表明您保证您业已年满16周岁且具有相应的民事行为能力来接受或代表您的受监护人接受本协议。您不可以将您的账号与其他人共享，但如果您是一个合法监护人，则您可以允许您的受监护人使用您的账号（这意味着您本人无法在同一时间使用该账号）。您需对此账号的一切行为负责，包括可能是经由您允许的使用您账号的您的受监护人的行为。

b. 为注册一个账号以进行本游戏，暗黑魔兽工作室会要求您提供：（i）您的名字，地址和电话（工作和家庭电话，如适用）； （ii）由暗黑魔兽工作室给您的“授权CD-KEY”。如您未能提供以上信息或未及时更新您的最新信息都会构成对本协议的违反，暗黑魔兽工作室有权随时终止您使用您的账号进行本游戏的权利。 这是为了证明您为“账号的唯一用户”。 若暗黑魔兽工作室发现您提供的是虚假的或误导性的信息，暗黑魔兽工作室保留立即停止和删除您的账号的权利。

c. 在注册过程中，您会被要求为您的账号选择一个用户名和密码（以下统称为“密码”）。 您的密码必须始终保密且您必须为您的密码和账号的安全负责。您不可以向任何人泄露您的密码或是允许为除了您或经您授权的受监护人以外的任何人使用您的密码以进行本游戏。任何因为您泄露您的密码或因为任何第三方泄露您的密码而导致的您的账号或游戏中的损失由您自行承担。请注意您的用户名必须根据本协议的命名规则来选择。

2． 对于您进行本游戏的限制

您进行本游戏将会受到如下所列的限制，该等限制同时也包括在“暗黑魔兽测试协议”的条款中，您在安装本游戏时已接受了该等条款。对于您进行本游戏的权利的限制包括但不仅限于：

a. 暗黑魔兽工作室保留根据本游戏制作衍生产品的独家权利。这意味着您不可以未经暗黑魔兽工作室事先的书面同意而利用本游戏制作任何衍生产品。

b. 暗黑魔兽工作室，作为暗黑魔兽工作室的被授权人，拥有本游戏在区域内的独家运营权。因此，您不可以对暗黑魔兽工作室和暗黑魔兽工作室使用的作为本游戏组成部分的通信协议进行提供主机服务；提供媒介服务或进行仿真或重新定向。 这些被禁止的方法包括但不仅限于通讯协议，虚拟隧道，反向组译，修改本游戏，向本游戏增加内容，或使用程序来提供本游戏主机服务。

c. 您不可以修改本游戏以改变游戏设定，包括但不仅限于欺骗和/或黑客行为，您也不可以使用任何与本游戏同时运行的可进入本游戏文件的第三方软件，或者是因任何原因以任何方式修改本游戏的“编码”。此外，不管运营系统是否使用该等软件，不管该等工具是否在同一台电脑上作为客户端或任何连接到该客户端或其网络的电脑上运行，或在您或其他人进行本游戏时监测本游戏的网络连接情况，您都不可以使用任何“包检查和监控”软件。

d. 您不可以对本游戏的服务器进行攻击或故意试图破坏本游戏的服务器。您也不可以进行任何可能破坏其他用户的客户端的攻击。任何来自于您或起源于您的来自于其他用户的账号的试图故意破坏本游戏或本游戏的合法运营的攻击都触犯了相关法律，若您进行了此等攻击或为该等攻击提供了协助，暗黑魔兽工作室和/或暗黑魔兽工作室保留根据法律向有关人员索赔的权利。

e. 您不可以，不管有意或无意地，触犯任何国家法律法规。

f. 您不可以修改任何未经暗黑魔兽工作室/暗黑魔兽工作室明示授权您修改的文件

g. 未经暗黑魔兽工作室事先书面同意，您不可以移除、改变或隐藏任何本游戏的所有权声明或标记。

3. 本游戏行为规则

本游戏为相关必须为所有本游戏用户接受的行为规则所管理，作为本游戏在区域内的独家运营商，暗黑魔兽工作室会执行以下所列规则。您有责任知道，了解并遵守这些规则。以下这些规则并非全无遗漏，暗黑魔兽工作室保留决定何种行为为违反游戏精神并采取相应的其认为合理的规范措施的权利。暗黑魔兽工作室保留随时增加或修改以下规则的权利，您有义务在每次登录本游戏前查阅是否有新增或修订的规则。

a. 用户名相关规则

每个用户可以为其角色取一个名字。此外，用户可以成立“公会”，而用户也同样需要为该“公会”选择一个名字。当您取了一个角色名，建立一个公会，或创建一个能为其他本游戏用户所看到的标记，您必须遵守严肃规则。如果暗黑魔兽工作室认为该等标记为不正当，则暗黑魔兽工作室保留更改名字，移除标记和/或禁止您使用本游戏的权利。

特别地：您不可以使用：

1． 刻意模仿别人的名字；您尤其不可以模仿暗黑魔兽工作室和/或暗黑魔兽工作室的官员或雇员；

2． 含有“诅咒”含义的名字或是有害的，破坏他人名誉的，粗俗的，猥亵的，带有种族歧视色彩的字眼；

3． 未经他人授权侵犯他人权利的名字；

4． 使用受人欢迎的文化或传媒明星的姓名；

5． 已作为商标或注册商标的名字；

6． 带有宗教色彩的名字；

7． 暗黑魔兽工作室的“暗黑魔兽”产品中的角色名，包括暗黑魔兽工作室战艺系列游戏中的角色名；

8． 与毒品，镇静剂或犯罪行为，包括涉及毒品类物质的名称

9． 名称中包含部分或完整的句子

10． 名称中包含完全无意义的杂乱字符（如"Asdfasdf", "Jjxccm", "Hvlldrm"）

11． 名称中包含称号。本协议中所用“称号”一词是指“职位称号”（如“主席”，“委员”）和/或幻想世界中的头衔（如“领主”，“男爵”）。

此外，您不可以故意使用错误拼法或与以上所列限制使用的名称相近的名称，您也不可以使用违反以上规定的“姓”或“名”的组合。

b. 与其他的用户“聊天”和互动的相关规则。

与其他用户及暗黑魔兽工作室的代表进行交流是本游戏的一部分，在本协议中称为“聊天”。 您的聊天可能会被暗黑魔兽工作室检阅，修改或删除而不另行通知。暗黑魔兽工作室没有义务监视您聊天，您需自行承担您聊天的风险。 当您在本游戏中聊天时，您不得：

1． 传送或张贴色情图片或其他暗黑魔兽工作室认为有害的的内容，您也不可以传送任何非法的，有害的，威胁性的，辱骂他人的，煽动性的，诽谤性的，粗俗的，淫秽的，或带有种族歧视的的内容；

2． 进行任何带有破坏性的行为，例如“刷屏”以使得其他用户无法输入，包括设置使用时具有破坏聊天正常流量作用的含有大量文本的宏；

3． 在聊天时的对话中破坏正常流量或其他对其他用户，个人或实体有害的行为，包括但不仅限于在本游戏中张贴“垃圾信息”。（本协议中所指的“垃圾信息”包括但不仅限于利用电脑或其他电子装置来张贴未经授权和/或未经提供的本游戏广告；

4． 张贴垃圾信息或向一单一邮件地址或在聊天区域中发送超过一个以上未经批准的信息；

5． 在本游戏，或本游戏相关的网站或论坛上沟通或张贴任何用户的个人信息；

6． 使用机器人软件或其他自动技术以在本游戏，或本游戏相关的网络或论坛中收集信息或张贴其他用户的信息；

7． 煽动，威胁，羞辱或导致本游戏中的其他用户产生反感；

8． 在游戏过程中欺骗，包括但不仅限于修改游戏程序。

C. 游戏设定规则

游戏设定是本游戏最重要的部分。 因此，暗黑魔兽工作室将非常严肃地对待管理本游戏的游戏设定。 请了解暗黑魔兽工作室考虑到所有本游戏的各种有效的游戏风格是游戏的一部分。因为本游戏是一个“用户对用户”的游戏，您应该首先牢记在敌对种族可以攻击您的地方保护您自己，而不是在您为敌对种族所杀害后联系客户服务职员寻求帮助。尽管如此，明显有失“公平”的行为会被认为是对于本协议的违反。这些行为包括但不仅限于以下：

1． 除非被要求这么做，您不可以故意地杀害或试图杀害已经与另一个人或团队开战的怪物。 该行为经常被称作“抢怪”，如果为本游戏管理员目击或证实，会立即采取相应规范措施；

2． 未经其他用户要求，您不可以故意引导怪兽或非用户角色来攻击您领域中的其他用户。 这一行为有时被称为“拉火车”。如果为本游戏管理员目击或证实，会立即采取相应规范措施；

3． 所有对于本游戏的连接，不管是否由暗黑魔兽工作室的软件产品或其他工具创建，只得用经暗黑魔兽工作室批准的方式方法连接。任何情况下您都不得连接或制造工具来允许您经由非暗黑魔兽工作室/暗黑魔兽工作室认可的途径连接本游戏的数据接口。

4． 您不可以利用设计错误和/或“程序bug”来进入未被提供的程序，或者是在与其他用户的竞争中获得优势；

5． 您不可以使用任何对本游戏的客户或服务器端软件进行黑客行为或更改的工具；

6． 您不可以使用任何通过“包检查和监控”或提供草稿和/或使用宏来从本游戏中获得信息以在与其他用户的竞争中获得优势的软件产品；

7． 您不可以做任何暗黑魔兽工作室认为违反本游戏“精神”的事情

4．账号/密码安全。

您有责任维护您的用户名和密码的保密性，您需为您对于您的用户名和密码的使用负责，不管该等使用是否经您授权。同时，请注意您的账号的安全是您的责任，若您的账号遭遇“黑客行为”或您的账号或电脑被病毒所破坏，偶然任何其他发生于您的电脑或账号的情况而导致您无法连接本游戏，无论是暗黑魔兽工作室还是暗黑魔兽工作室都不应承担任何责任。若您认为您的账号发生异常情况，请通过游戏管理员或致电暗黑魔兽工作室的技术服务部门获得技术支持，暗黑魔兽工作室会尽力帮助您恢复您账号的安全。这些技术支持包括重设密码，或是为提高您账号安全的基本建议。若您报告您的账号被窃取，遭遇黑客行为或其他任何异常情况，暗黑魔兽工作室会在彻底调查情况时禁用您的账号。这是为了保护您账号中的角色，物品等。 在调查之后，暗黑魔兽工作室会决定采取适当的措施。

5．违反行为规则的结果

暗黑魔兽工作室完全保留采取一切其认为必要的保证本游戏及相关服务的完整性的行动的权利。 对于以上条款的任何违反可能导致暗黑魔兽工作室立即或在暗黑魔兽工作室认为合适的时候采取包括但不仅限于以下方式的行动：（i）暗黑魔兽工作室可能暂停您的账号进入本游戏的权利。（ii） 暗黑魔兽工作室可能永久性停止您的账号进入本游戏的权利。和/或（iii）假设暗黑魔兽工作室应政府当局和/或其他方面要求协助调查对您的与您进行本游戏相关的行为，暗黑魔兽工作室会全力配合政府要求或法令从而披露所有有关于您或您进行本游戏的相关信息，包括但不仅限于IP地址，相关私人信息以及任何的用户信息。

除了以上行动以外，暗黑魔兽工作室保留拒绝向任何违反本协议或暗黑魔兽测试协议的用户提供服务的权利。

6．经验补偿

首先，本条的任意内容都不意味着暗黑魔兽工作室有责任为您的因任何原因造成的经验值损失对您提供补偿。也就是说，暗黑魔兽工作室可全权决定是否在特别情况下对用户的经验值损失进行补偿。 例如，暗黑魔兽工作室可以决定因服务器损坏而对您所丢失的经验进行补偿。但请记得这完全取决于暗黑魔兽工作室的决定，在任何情况下暗黑魔兽工作室都没有义务提供金钱补偿。

7．我们对于本游戏的管理；对本协议的变更

暗黑魔兽工作室保留权利随时更改，修订，增加，补充或删除本协议的任何条款，包括但不仅限于登录方式，本游戏特色，游戏时间，内容，数据，进入本游戏所必须的软件或设备等，以根据如下的事先通知而有效。暗黑魔兽工作室会在本游戏官方网站上张贴有关更改的通知并在同一位置张贴经修改后的本协议，并选择以以下任意方式进行通知：电子邮件，邮政邮件或弹出窗口。 如果您不接受修改，您可以停止使用本游戏并终止您的账号。 若您在该等通知后仍然继续使用本游戏则意味着您接受所有的修改。暗黑魔兽工作室可随时更改，修订，停止本游戏的任何方面的服务。暗黑魔兽工作室也可以不经通知对您进入本游戏的部分或是其他游戏特点进行限制而无须承担任何责任。您不可因游戏的特征、内容、游戏数据或适用性获得任何利益或金钱。

8．所有权

暗黑魔兽工作室及其授权人拥有本游戏的一切所有权及知识产权（包括但不仅限于用户账号，游戏名称，电脑代码，主题，物品，角色，角色名，故事情节，对话，专用语句，游戏内场地，概念，美术工艺，动画，音效，音乐，视觉效果，运行方式，精神权，相关文档，游戏包含程序，聊天室脚本，成员信息，游戏记录，和软件）本游戏为美国版权法，国际版权公约及相关法律保护。暗黑魔兽工作室保留所有权利。暗黑魔兽工作室拥有本游戏在区域内的独家代理运营权。本游戏可能含有一定授权材料，暗黑魔兽工作室的授权人在您违反本协议时可能会保护他们的权利。

9．出售角色和物品

我们在本协议一开始的时候已经讨论了有关您如何被授权进行本游戏以及对于给您的授权的限制。本条则描述了一个更重要的限制。请注意，暗黑魔兽工作室拥有或被独家授权了本游戏中所出现的一切内容。所以，除了暗黑魔兽工作室以外，没有人有权出售暗黑魔兽工作室所拥有的内容。 因此，暗黑魔兽工作室和暗黑魔兽工作室均不承认本游戏以外的任何财产主张或与本游戏相关的任何物品的真实世界中的交易。 因此，您不得出售任何物品以获得现实货币或是与游戏外的真实物品。

10．终止

本协议在任意一方终止前有效。如果您终止本协议，你就丧失了进入本游戏的资格。如果您违反了本协议或暗黑魔兽测试协议，暗黑魔兽工作室保留不经通知而终止本协议的权利。请注意暗黑魔兽工作室必须全力配合有关司法调查，包括但不仅限根据政府的要求追踪您的IP地址或相关的私人信息或其他有关用户信息。

11．确认

您在此确认：

（i）您自行承担连接本游戏的电信费用以及必须的设备，服务，维修或维护费用；

（ii）作为您注册过程的一部分以及进入本游戏的对价，暗黑魔兽工作室有权向您的电脑发送或一个或几个“cookies”而不特别通知您，暗黑魔兽工作室也有权从您的电脑及运行系统中获得相关身份信息而不特别通知，包括但不仅限于您的硬盘，CPU，IP地址，运行系统的序列号。

（iii）暗黑魔兽工作室有权获得因您登录本游戏而产生的非私人数据以进行相关本游戏用户统计而无须对您特别通知。

（iv）暗黑魔兽工作室有权从您的电脑系统中下载软件程序文件，包括但不仅限于Windows环境下系统运营的ActiveX文件，这样会从您的电脑中记录下CPU，RAM，运营系统，声卡，显卡信息。

（v）暗黑魔兽工作室和暗黑魔兽工作室均不保证本游戏不会中断或不出现错误，所有的缺陷均会被更正，或有关网站和连接服务或服务器不会受到病毒或其他有害内容的损害。同时，暗黑魔兽工作室和暗黑魔兽工作室也不对本游戏承担任何明示或默示的担保责任，包括但不仅限于有关条件，缺陷，使用，销售或任何特别的使用目的，或无侵权性。 任何无侵权的担保因在政府法令或相关法律明示的情况下作出。

（vi）暗黑魔兽工作室和暗黑魔兽工作室，及其母公司，子公司，授权人或关联公司（合称为“授权人”）对于您因进行本游戏而产生的任何形式的损失，包括但不仅限于名誉损失，误工损失，电脑故障或其他任何形式的损失等，不承担任何责任。 并且，授权人对于本游戏中存储的任何游戏角色，账号，统计或用户信息的损失不承担任何责任。暗黑魔兽工作室和暗黑魔兽工作室对于任何服务中断，包括但不仅限于ISP中断，软件或硬件故障引起的数据丢失或服务中断，不承担任何责任。在任何情况下，授权人对您都不承担任何偶然的，特别的损失。

（vii）您可能无法在任何您需要的时候进入本游戏，有时您可能无法进入游戏。

（viii）暗黑魔兽工作室和暗黑魔兽工作室对于在暗黑魔兽工作室和暗黑魔兽工作室合理控制以外的原因造成的延误不承担责任。

（ix） 本游戏要求创建和保持电子文件，包括但不仅限于由暗黑魔兽工作室保存的游戏角色，账号，统计数据，用户资料，武器，盔甲，战利品等（总称为“游戏数据”）。保证游戏数据的安全是暗黑魔兽工作室和暗黑魔兽工作室的优先权，请注意暗黑魔兽工作室和暗黑魔兽工作室对于包括但不仅限于服务器当机，电信或网络故障，缺陷，病毒或其他有害信息，或暗黑魔兽工作室和暗黑魔兽工作室和/或其关联公司的疏忽等任何原因造成的该等游戏数据的丢失不承担任何责任。

（x）暗黑魔兽工作室和暗黑魔兽工作室全权保留修改或删除包括但不仅限于游戏数据和其他累计，储存或上传于本游戏中的任何信息的权利。

（xi）您对于您通过您的本游戏账号进行的任何行为应承担全部责任，并有义务保证任何使用您的本游戏账号的其他人了解并服从本协议条款。如果您获悉或怀疑您的用户名和密码出现任何安全问题，包括损失，偷盗或未经授权的披露，您应通过向以下地址shenhuyong@163.com发送邮件或致电暗黑魔兽工作室技术支持来报告以上情况。

（xii）暗黑魔兽工作室和暗黑魔兽工作室对于任何情况下对于用户名，用户密码或用户的本游戏账号的未经授权的使用承担责任。任何牵涉到您的本游戏账号的欺诈，侮辱他人或任何非法行为可能会由暗黑魔兽工作室和/或暗黑魔兽工作室报告给有关法律部门。本协议条款对任何您允许使用您的本游戏账号，用户名，或游戏角色的人亦有效，您需对其违反本协议的行为承担责任，包括但不仅限于终止您的账号，丢失您的用户名和角色等。

12．公平救济

您知道如果您违反本协议，则暗黑魔兽工作室和/或暗黑魔兽工作室会遭受无法弥补的损失，因此您同意暗黑魔兽工作室和暗黑魔兽工作室除了获得根据法律可以获得的补偿，还被授权无限制且无需其他的安全或损害的证据因为您违反本协议而获得适当的相应补偿，这些补偿是暗黑魔兽工作室和/或暗黑魔兽工作室在适用法律下的其他救济的补充。如任意一方就本协议提起有关诉讼，获胜一方有权要求败诉方承担有关律师费用或其他相关诉讼费用。

13．其他

本协议受中华人民共和国法律管辖（不包括任何准据法）。那些自愿选择在其他地方进入网站和/或本游戏的用户应遵守当地法律。软件还应受到有关出口控制。本游戏软件不得在区域外下载或出口或再出口。双方同意，如果本协议的任何条款是非法的，无效的或因任何原因而无效，则该条款的无效不应当影响其他条款的有效性。

您在次保证您已阅读并理解了前述协议并且同意对于本游戏是建立在了解您已同意本游戏所包含条款的前提下。您也了解和同意本协议是您和暗黑魔兽工作室之间就使用本游戏达成的协议的完整和唯一表述，您和暗黑魔兽工作室之间的任何之前的口头或书面约定都应为本协议取代。

IMPORTANT
Please take a moment to review these rules detailed below. If you agree with them, then you may proceed with entering the website.

No one from Blizzard, associated with Blizzard or any such affiliated company or anyone directed by Blizzard or its Related companies is permitted to enter these web sites or view any content contained within these sites at any time what so ever due to controversial reasons.

1. ACCEPTANCE OF TERMS OF USE AND AMENDMENTS
Each time you use or cause access to this web site or services, you agree to be bound by these Terms of Use, and as amended from time to time with or without notice to you. In addition, if you are using a particular service on or through this web site, you will be subject to any rules or guidelines applicable to those services and they shall be incorporated by reference into these Terms of Use.

2. OUR SERVICE
Our web site and services provided to you on and through our web site on an AS IS basis. You agree that the owners of this web site exclusively reserve the right and may, at any time and without notice and any liability to you, modify or discontinue this web site and its services or delete the data you provide, whether temporarily or permanently. We shall have no responsibility or liability for the timeliness, deletion, failure to store, inaccuracy, or improper delivery of any data or information.

3. YOUR RESPONSIBILITIES AND REGISTRATION OBLIGATIONS
In order to use this web site, you must register on our site, and agree to provide truthful information when requested. When registering, you explicitly agree to our Terms of Use and as may be modified by us from time to time and available here. Exchanging accounts, donation items, or characters is not allowed. You are solely responsible for your account. If your account has been banned because it was being used by someone else, you will not be unbanned. Characters that are deleted are gone for good, and cannot be restored. We will not help you in any way if it was done by accident or not.

4. REGISTRATION AND PASSWORD
You are responsible to maintain the confidentiality of your password and shall be responsible for all uses via your registration and/or login, whether authorized or unauthorized by you. You agree to immediately notify us of any unauthorized use or your registration, user account or password.

5. CHEATING
Cheating is defined as any attempt to give yourself an advantage over players that does not follow the spirit of the game. Any player caught cheating will be banned. Profession stacking is included in this category. We reserve the right to deny any person access to the services on this website at our discresion.

6. DONATIONS
Please take a moment to review these rules detailed below. If you agree with them, then you may proceed with entering the website. No one from Blizzard, associated with Blizzard or any such affiliated company or anyone directed by Blizzard or its Related companies is permitted to enter these web sites or view any content contained within these sites at any time what so ever due to controversial reasons. You agree to give up all legal rights towards 暗黑魔兽工作室 when donating.

7. DEFINITIONS AND INTERPRETATIONS
"Donation" or "Donate" is a legacy term whose current use means generically any purchase or exchange of money facilitated by 暗黑魔兽工作室, regardless of intent to receive a product or service in return.


"Purchase" means any exchange of funds for which entry into the 暗黑魔兽工作室 VIP Club is given. This term is used interchangeably with the term "donation".


"User" or "Users" means any third party that accesses the web site and is not employed by 暗黑魔兽工作室 and acting in the course of their employment.


"Certificate" means printed and mailed proof of membership in 暗黑魔兽工作室 VIP Club.


"暗黑魔兽工作室 VIP Club" or "VIP Club" means an exclusive group of users of the web site who have obtained exclusive and special status through their support or help. Members of this club may obtain special priviledges, status, and/or access to web site store products or services. Any special treatment or access to web site store access is not meant to be inferred as a direct purchase of these items, but instead as an indirect expression of gratitude from the web site for entry into the club. The direct reward is recognition of membership on the web site's forum, and a certificate of membership which is mailed upon purchase and choosing to receive the certificate from within the store.


"Web Site" means the website that you are currently using www.rpwow.com any sub-domains and subdomains of this site unless expressly excluded by their own terms and conditions.

8. REFUNDS
暗黑魔兽工作室 will not provide refunds under any circumstances. Membership in the 暗黑魔兽工作室 VIP Club is voluntary, and if a user does not wish to be a member, should not seek entry. If you are banned due to violation of our player rules, you will not get a refund. If you do not favor the service, you will not get a refund. If you unexpectedly did not receive your certificate, and don't have any proof of your purchase, you will not get a refund. You may appeal your case regarding your purchase on the forums by PM to a member of Management, and we will review your case, but we do not guarantee that you will receive any additional 暗黑魔兽工作室 VIP Club awards other than a certificate of membership and recognition on the web site's forum, as defined above. It's not required for you to make a purchase or join the club to enjoy the full experience of 暗黑魔兽工作室; it's completely optional and is done at your own risk.

9. EXCHANGE
If you for any reason have store item(s) damaged, broken, lost, etc... you will not receive an exchange if you have opaque proof of your purchase into the VIP Club or not. Only a member of Management has the authority to replace your reward item if they feel the receipt you've presented is authentic.

10. REWARDS
When you join the 暗黑魔兽工作室 VIP Club, it is understood that you're purchasing at your own risk. You are actually paying for a certificate of membership into the 暗黑魔兽工作室 VIP Club, which will be mailed to you with a tracking number and usually signature confirmation to verify it was received. If you do not receive the certificate, you may request it via an in-game support ticket or in the web site's store. Web site store items are exclusively indirect expressions of gratitude for your consideration in joining the 暗黑魔兽工作室 VIP Club and the perks that come with it. You're not purchasing any service, you're helping to keep our servers up. We're not selling virtual items; when you purchase, you take the risk(s) involved in purchasing as listed in the "Refund Policy".

11. CHARGE BACKS
Any attempts to reverse payment on a purchase will be met with an automatic and immediate IP address ban. All accounts tied to this IP address will be permanently banned. Our accounting team always contests each and every charge back and has a high success rate. If this fails, charge backs are routinely sent to a third-party collections agency, and the buyer's credit history will be affected if the charge is not paid for.

12. INDEMNIFICATION
You agree to indemnify and hold us harmless, our subsidiaries, affiliates, related parties, officers, directors, employees, agents, independent contractors, advertisers, partners, and co-branders from any claim or demand, including reasonable attorney's fees, that may be made by any third party, that is due to or arising out of your conduct or connection with this web site or service, your provision of Content, your violation of this Terms of Use or any other violation of the rights of another person or party.

13. DISCLAIMER OF WARRANTIES
YOU UNDERSTAND AND AGREE THAT YOUR USE OF THIS WEB SITE AND ANY SERVICES OR CONTENT PROVIDED (THE SERVICE) IS MADE AVAILABLE AND PROVIDED TO YOU AT YOUR OWN RISK. IT IS PROVIDED TO YOU AS IS AND WE EXPRESSLY DISCLAIM ALL WARRANTIES OF ANY KIND, IMPLIED OR EXPRESS, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE MAKE NO WARRANTY, IMPLIED OR EXPRESS, THAT ANY PART OF THE SERVICE WILL BE UNINTERRUPTED, ERROR-FREE, VIRUS-FREE, TIMELY, SECURE, ACCURATE, RELIABLE, OF ANY QUALITY, NOR THAT ANY CONTENT IS SAFE IN ANY MANNER FOR DOWNLOAD. YOU UNDERSTAND AND AGREE THAT NEITHER US NOR ANY PARTICIPANT IN THE SERVICE PROVIDES PROFESSIONAL ADVICE OF ANY KIND AND THAT USE OF SUCH ADVICE OR ANY OTHER INFORMATION IS SOLELY AT YOUR OWN RISK AND WITHOUT OUR LIABILITY OF ANY KIND. Some jurisdictions may not allow disclaimers of implied warranties and the above disclaimer may not apply to you only as it relates to implied warranties.

14. LIMITATION OF LIABILITY
YOU EXPRESSLY UNDERSTAND AND AGREE THAT WE SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES, INCLUDING BUT NOT LIMITED TO, DAMAGES FOR LOSS OF PROFITS, GOODWILL, USE, DATA OR OTHER INTANGIBLE LOSS (EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES), RESULTING FROM OR ARISING OUT OF (I) THE USE OF OR THE INABILITY TO USE THE SERVICE, (II) THE COST TO OBTAIN SUBSTITUTE GOODS AND/OR SERVICES RESULTING FROM ANY TRANSACTION ENTERED INTO ON THROUGH THE SERVICE, (III) UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR DATA TRANSMISSIONS, (IV) STATEMENTS OR CONDUCT OF ANY THIRD PARTY ON THE SERVICE, OR (V) ANY OTHER MATTER RELATING TO THE SERVICE. Note that by accepting the terms in the document, you are also waiving your right, to take any action, legal or otherwise, against anyone or anything related to 暗黑魔兽工作室. Please remember that we are not responsible for any messages posted. We do not vouch for or warrant the accuracy, completeness or usefulness of any message, and are not responsible for the contents of any message. The messages express the views of the author of the message, not necessarily the views of this bulletin board. Any user who feels that a posted message is objectionable is encouraged to contact us immediately by email. We have the ability to remove

objectionable messages and we will make every effort to do so, within a reasonable time frame, if we determine that removal is necessary. You agree, through your use of this service, that you will not use this bulletin board to post any material which is knowingly false and/or defamatory, inaccurate, abusive, vulgar, hateful, harassing, obscene, profane, sexually oriented, threatening, invasive of a person's privacy, or otherwise violation of any law. You agree not to post any copyrighted material unless the copyright is owned by you or by this bulletin board. If you have read, understood and agree to these rules and conditions, you may enter the website and/or forums. If you disagree, leave immediately. You agree to give up all legal rights towards 暗黑魔兽工作室 when donating.

15. PRIVACY POLICY
During the registration process, we ask you to provide personal information such as your email address, name, password, spoken language, and time zone. If you choose to make a purchase, we will ask you for additional information, such as your credit card number, billing address, and shipping address, which is used to bill your account. 暗黑魔兽工作室.com collects your personal information to provide you with access to our services, and to fulfill your purchases. We also may use your personal information to communicate with you. We may send communications with you such as letters or emails that provide you with news and important updates and confirm your membership in the VIP club. You may also receive receipts for purchases, and information on technical service issues. However, personal information collected on 暗黑魔兽工作室.com will not be disclosed outside of 暗黑魔兽工作室 without your consent, except where it is deemed necessary by the law.',
            'date'         => '1659139200',
        );
        $this->db->insert('pages', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('pages');
    }
}
