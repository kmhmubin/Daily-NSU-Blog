-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 11:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--
-- Creation: Mar 19, 2022 at 02:40 PM
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` int(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `posts`:
--   `topic_id`
--       `topics` -> `id`
--

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(5, 11, 9, 'Developing AI Web Applications in Python', '1647780077_ai-post.webp', '&lt;h2&gt;&lt;strong&gt;Did you know!&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;The global AI market is going to reach $190.61 billion by 2025.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Artificial Intelligence holds a compound annual growth rate of 40.2% from 2021 to 2028.&lt;/li&gt;&lt;li&gt;The revenue forecast of AI in 2028 stands at a whopping $997.7 billion.&lt;/li&gt;&lt;li&gt;Business leaders firmly believe that AI will become fundamental, and 94% consider it will create multiple innovative opportunities.&lt;br&gt;&amp;nbsp;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Artificial Intelligence (&lt;strong&gt;AI&lt;/strong&gt;) has long been an essential part of any business that relies on data, analytics, and automation to run its business processes and operations.&amp;nbsp;&lt;/p&gt;&lt;p&gt;AI provides automated decision-making based on the evaluation of big data. However, when looking for AI development, a significant aspect is choosing the right programming language besides the right team.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Python in Artificial Intelligence is a renowned option for software development projects. Notably, Python has emerged as one of the most popular programming languages for AI-related applications today.&lt;/p&gt;&lt;p&gt;In fact, Statista lists Python among the top programming languages for web development with a popularity of 48.24%. The infographic below offers insights into the chief languages preferred worldwide for web development.&lt;/p&gt;', 1, '2022-03-20 18:41:17'),
(6, 11, 8, '\'Open Banking\' for Noobs: A Primer', '1647780402_finance-post.webp', '&lt;p&gt;My intention with this primer is to give you just enough information to inspire appreciation for Open Banking is an initiative that is changing our financial landscape.&lt;/p&gt;&lt;p&gt;This primer will show you the immediate application of Open Banking in your everyday life, and also encourage you to think of other use cases for it.&lt;/p&gt;&lt;h2&gt;Key Terms&lt;/h2&gt;&lt;p&gt;Here are some key terms you&rsquo;ll need to understand Open Banking:&lt;/p&gt;&lt;p&gt;Core Infrastructure: The core systems of a bank which hold information about its customers, e.g. bank balance, personal information, and transaction history. It is this core infrastructure that Third-Party Providers interact with in order to provide open-banking products and services.&lt;/p&gt;&lt;p&gt;Third-Party Provider:&amp;nbsp;Any external party outside the host bank which is accessing the bank&rsquo;s core infrastructure in order to use the information accessed to provide open-banking products and services.&lt;/p&gt;&lt;p&gt;API: Software intermediaries that dictate how two pieces of software can communicate or interact with each other. In Open Banking, the API dictates how the Third-Party Provider&rsquo;s software interacts with the bank&rsquo;s core infrastructure&lt;/p&gt;&lt;h2&gt;What is Open Banking?&lt;/h2&gt;&lt;p&gt;Open Banking is an initiative that has led to the enablement of Third-Party Providers, with the prior consent of the customer/account holder, to interact with the customer&rsquo;s financial information which is being held in the bank&rsquo;s core infrastructure.&lt;/p&gt;&lt;p&gt;These interactions enable the creation of new financial offerings and services, which enhance the financial experience of the account holders. Third-Party Providers are able to access the bank&rsquo;s core infrastructure solely through the use of APIs which helps the banks limit the information these providers have access to.&lt;/p&gt;&lt;p&gt;Up until a few years ago, banks&rsquo; core infrastructure was locked away from external access, so what brought about this shift towards a more collaborative, &ldquo;open&rdquo; system? The intention of Open Banking is to bring about more competition and innovation to the financial services industry, with the ultimate goal of enriching the financial experience of the consumers.&lt;/p&gt;&lt;p&gt;&ldquo;Open Banking was designed to increase innovation and competition in banking and payment services.[&hellip;] It introduced a secure environment that enables customers to consent to third parties accessing their payment account information or making payments on their behalf&rdquo;&lt;/p&gt;&lt;p&gt;Source: The UK Financial Conduct Authority&rsquo;s &ldquo;Open finance - feedback statement&rdquo;&lt;/p&gt;', 1, '2022-03-20 18:46:42'),
(7, 11, 7, 'How to Operate Promotional Robots with Minimal Technical Knowledge', '1647780536_robotic.webp', '&lt;p&gt;A popular notion suggests that a robot is always a complicated technology. Most of the time it is referred to as less &lsquo;familiar&rsquo; forms of robots, however. After all, our technologies, be that a Roomba, a voicemail box, or a smartphone, are robots too and they can be configured and used without any problems.&amp;nbsp;&lt;/p&gt;&lt;p&gt;While we found a way to communicate with our appliances, other types of robots only appear more and more unfriendly. Often it relates to service robots ― ones that have humanoid features, e.g. head, body, arms.&lt;/p&gt;&lt;p&gt;Once a decision is made to purchase such a robot, there is also a sense of uncertainty as far as how to operate it. In reality, even a teenager can handle most services and setup tasks related to it.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1. Initial setup&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;There are two ways to set up and activate your robot: you can do it yourself or let trained people do it.&lt;/p&gt;&lt;p&gt;A Promobot robot, for example, can be activated and set up from the beginning with the help of Promobot&rsquo;s technical support. Company specialists explain the process step-by-step and can access the robot remotely if that is necessary.&lt;/p&gt;&lt;p&gt;This allows the user to press one button and just follow the instructions. Any experience in communicating with technical support is helpful, even if it comes down to assembling an IKEA cabinet over the phone just once (because who needs instructions, right?).&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;2. Upload info into the robot&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Promotion robots can present different content that has to be uploaded in their memory. That includes promotional phrases, audio, video files, and pictures. Promobot robots can be equipped with dances ― special scripts for movements that can be performed by the robot.&amp;nbsp;&lt;/p&gt;&lt;p&gt;In order to make the info upload process easier, different companies offer their own platforms.&amp;nbsp;&lt;a href=&quot;https://promo-bot.ai/information/upload/?ref=hackernoon.com&quot;&gt;All types of media could be uploaded&lt;/a&gt;&amp;nbsp;as easily as photos on Instagram through them. You can upload a file and it will be presented by the robot in just a few seconds. There are also web services where new moves, dances, and other movement scenarios can be created for robots ― easy as pie.&lt;/p&gt;&lt;p&gt;People can teach robots how to dance without any technical knowledge. The process of uploading dances takes a few minutes ― much less than teaching real people the moves.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;3. Troubleshooting&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Even the most reliable tech can sometimes malfunction. It is important to find the issue and quickly troubleshoot it. Any technical malfunctions in Promobot robots can be fixed remotely by the company&rsquo;s technical specialists ― sometimes robot owners don&rsquo;t even know that their robot was not working correctly and the issue is solved already.&lt;/p&gt;&lt;p&gt;Even if people have to troubleshoot on their own, it is never an impossible task. The world&rsquo;s largest mall in Dubai had&amp;nbsp;&lt;a href=&quot;https://promo-bot.ai/client-stories/how-to-attract-customers-to-your-restaurant-and-away-from-the-competition-promobot-in-dubai-mall/?ref=hackernoon.com&quot;&gt;a situation in their work with the robot&lt;/a&gt;:&lt;/p&gt;&lt;p&gt;&quot;After a while, and it happened long after the Promobot specialists visited us for the initial installation of the robot, we needed to interact with the robot&rsquo;s mechanisms underneath the protective plastic parts. Our manager at that time was not a technical person at all, and she had to work with the technical support, use videos and photos to almost entirely disassemble the robot&rsquo;s hand, find and fix the issue and then reassemble it again. Everything went well, the hand was working again and while it was happening it looked super badass.&quot;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2022-03-20 18:48:56'),
(8, 11, 6, 'Hiring an Engineer: 7 Different Types of Engineering Interviews', '1647780624_engineer-post.webp', '&lt;p&gt;After conducting hundreds of engineering candidate interviews on behalf of Stripe and&amp;nbsp;LogicLoop - and having interviewed at 30+ tech companies ranging from less than 10 people startups to giants like Facebook, Palantir, and Google - least to say, I&rsquo;ve seen quite the gamut of engineering interviews. If you&rsquo;re an engineering leader thinking about how to design your interview program, or a candidate wondering what types of interviews are out there, let&rsquo;s dive into the most common interview question types and pros and cons of each.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;First, let&rsquo;s get the elephant out of the room. No engineering interview process is perfect and all interviews are at best a narrow snapshot of how well a candidate may do at your company. There are candidates who bomb interviews end up being very strong engineers, but also candidates who do well in interviews but end up struggling on the job. That being said, while imperfect, interviews do give some signals that can be indicative of how well the candidate may fit into your company.&lt;/p&gt;&lt;h2&gt;#1. The take-home coding interview&lt;/h2&gt;&lt;p&gt;The first is the take-home coding interview. Typically this is a longer coding exercise that can take anywhere from a few hours to a day to complete. Since there&rsquo;s less time pressure and candidates are able to use resources available to them on the internet, the take-home interview typically involves completing a small project end-to-end.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;There&rsquo;s less time pressure and candidates get to work in a comfortable environment where they can iterate on their code until it&rsquo;s satisfactory to them.&lt;/p&gt;&lt;p&gt;For longer take-home exercises, some companies even compensate candidates for their time.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;You get less signal on the candidate&rsquo;s thought process and how they interact with others.&lt;/p&gt;&lt;p&gt;It&rsquo;s easier to cheat or directly look up the answer on the internet.&lt;/p&gt;&lt;p&gt;For people will busy lives, take-homes can be time-consuming, especially if the candidate is interviewing at multiple places.&lt;/p&gt;&lt;h2&gt;#2. The algorithms interview&lt;/h2&gt;&lt;p&gt;The algorithms interview is the most classic engineering interview that companies like Google, Facebook, and Palantir like to implement. Typically this will involve concepts like dynamic programming, recursion, sorting, binary trees, etc. Candidates will also need to be familiar with common data structures like arrays, dictionaries, trees, etc.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;These types are interviews are extremely common among large top tech companies and many candidates know how to prepare for them via e.g. leetcode.&lt;/p&gt;&lt;p&gt;Algorithms typically take some amount of rigorous thinking to get right and require you to think through edge cases, so there&rsquo;s some correlation there with general intelligence and the ability to think through complex problems.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Since many of these algorithms are not used on a day-to-day basis in software engineering, many senior candidates may not have these concepts top of mind vs a junior candidate who learned these algorithms recently in their Computer Science course in college.&lt;/p&gt;&lt;p&gt;Non-traditional programs such as programming boot camps don&rsquo;t teach advanced algorithms so you may eliminate folks with non-traditional backgrounds.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;In recent years, there&rsquo;s been more controversy over whether companies should ask algorithms interview or not, given they are not directly related to the day-to-day job.&lt;/p&gt;&lt;h2&gt;#3. The bug squash&lt;/h2&gt;&lt;p&gt;In an effort to mirror more day-to-day working environments, some companies have introduced the bug squash interview. In this interview, a candidate will be given access to some pre-existing codebase with a bug and it&rsquo;s the candidate&rsquo;s job is to find and fix the bug.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;These interviews can give you signal into how the candidate navigates a large, pre-existing codebase, which some of the other types of interviews don&rsquo;t test for since other interview formats typically ask the candidate to write a small program from scratch.&lt;/p&gt;&lt;p&gt;They say it takes a smarter person to debug a piece of code than to write that piece of code, so if a candidate can pull this off, it&rsquo;s a good sign.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Some candidates will go down unfortunate rabbit holes and not be able to find the bug within the allotted interview time slot. Sometimes it just so happens that a candidate misses a section of documentation during the interview that would have clued them into the bug. Due to the limited time constraint, candidates won&rsquo;t have time to comprehensively read through all docs, so some will do a skim, and if that skim results in skipping over the relevant parts, it might just not be their lucky day. This doesn&rsquo;t necessarily mean that they wouldn&rsquo;t do well if given more time.&lt;/p&gt;&lt;p&gt;It&rsquo;s difficult to understand a large codebase within a short amount of time.&lt;/p&gt;&lt;h2&gt;#4. The systems design&lt;/h2&gt;&lt;p&gt;The systems design interview typically asks a candidate to describe how they would set up the infrastructure to support a scalable system. This can be a whiteboarding exercise where the candidate describes the boxes, queues, etc. they would set up to create a scalable system e.g. a webhooks delivery system, a metrics recording system, etc.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The systems design interview is a great non-coding interview to see if the candidate is able to set up a system and think about scalability, reliability, and operability at the infrastructure level.&lt;/p&gt;&lt;p&gt;Usually, this involves a lot of back and forth conversation with the interviewer and question asking, so you get a sense of how to collaborate with the candidate.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;People who have more experience with infrastructure will tend to do well in these interviews whereas new grads and more junior candidates may simply not have the experience to answer this question well.&lt;/p&gt;&lt;h2&gt;#5. The code review&lt;/h2&gt;&lt;p&gt;While this interview format is uncommon, some companies have started employing the code review interview where the interviewer will either ask the candidate to review a piece of code, or the candidate will submit a piece of code to be reviewed by the interviewer, and incorporate the feedback given.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Since code reviews are a code part of an engineer&rsquo;s job, this provides good insight into how they may actually do a code review on the job.&lt;/p&gt;&lt;p&gt;This exercise can also test for soft skills. Did they take feedback with grace and correct their mistakes? Are they able to give feedback in a constructive manner?&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;It can be difficult to review a piece of code in isolation without more context on the wider codebase.&lt;/p&gt;&lt;h2&gt;#6. The integrations interview&lt;/h2&gt;&lt;p&gt;Another &ldquo;practical&rdquo; code question that has become popular over the years is the integration interview. It&rsquo;s no denying that in the age of APIs, many software engineers have had to integrate some external system as part of their jobs. The integrations interview simply asks the candidate to demonstrate that they can write a program that integrates with some third-party API, such as Stripe or Twilio.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Since integrating APIs and reading documentation are a common part of an engineer&rsquo;s job, this provides good insight into how they may actually hook up an integration on the job.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;For an engineer with a lot of industry experience, this should not be a difficult task to do at all, so arguably this is an &ldquo;easy&rdquo; interview.&lt;/p&gt;&lt;h2&gt;#7. The soft skills/culture fit/manager interview&lt;/h2&gt;&lt;p&gt;Finally, most companies include a soft skills interview, typically with the manager of the team. The interview gives hiring managers the opportunity to ask about projects candidates have worked on in the past as well as their strengths and weaknesses. It also gives candidates the chance to ask questions about the company and team.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Soft skills are an important part of an engineer&rsquo;s job and it&rsquo;s important for a hiring manager to meet with the candidate to get a sense of whether they&rsquo;d work well together.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;How well a candidate does on this interview can be very subjective.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;If you&rsquo;re a hiring manager, I hope this gives you a few options to brainstorm as you&rsquo;re thinking about setting up your interview program. At&amp;nbsp;LogicLoop, we do a combination of the interview types listed above, although we tend to go lighter on the algorithms questions and instead focus on the practical coding exercises.&lt;/p&gt;', 1, '2022-03-20 18:50:24'),
(9, 11, 5, 'Introducing ApiHome: Home of API Testing', '1647780683_programming-post.webp', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Hello folks! I am excited about introducing ApiHome.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#What is it?&lt;/h2&gt;&lt;p&gt;It&#039;s an OpenAPI based testing tool that runs generated negative test cases&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Why OpenAPI ?&lt;/h2&gt;&lt;p&gt;The &lt;a href=&quot;https://www.openapis.org/&quot;&gt;OpenAPI specification&lt;/a&gt; was known as Swagger until version 3.0 got released in 2017 and it was renamed to OpenAPI. It&rsquo;s a language-agnostic way to describe a RESTful API that can be used to generate code-stubs and documentation.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#How does it Work?&lt;/h2&gt;&lt;p&gt;Start with the default template or upload an OpenAPI spec or Postman collection&lt;/p&gt;&lt;p&gt;Fix validation errors&lt;/p&gt;&lt;p&gt;Run API Tests&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Use-cases:&lt;/h2&gt;&lt;p&gt;API Inventory&lt;/p&gt;&lt;p&gt;Business-logic testing(negative test-cases)&lt;/p&gt;&lt;p&gt;Security testing&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Why ApiHome?&lt;/h2&gt;&lt;p&gt;Easier to navigate UI&lt;/p&gt;&lt;p&gt;To the point Spec validation errors let you get documentation out of the way&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Upcoming Features:&lt;/h2&gt;&lt;p&gt;Code repository crawler to discover API assets&lt;/p&gt;&lt;p&gt;More fuzzing rules &amp;amp; examples to fix validation errors quickly&lt;/p&gt;&lt;p&gt;CI/CD integration&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;ApiHome is in Beta and is free to use! I would love for you guys to give it a shot and share feedback.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Head over to https://apihome.io to get started&lt;/h2&gt;', 1, '2022-03-20 18:51:23'),
(10, 13, 5, 'PHP The Right Way', '1648844519_the-blowup-swDEADSet6Y-unsplash.jpg', '&lt;p&gt;There&rsquo;s a lot of outdated information on the Web that leads new PHP users astray, propagating bad practices and insecure code. PHP: The Right Way is an easy-to-read, quick reference for PHP popular coding standards, links to authoritative tutorials around the Web and what the contributors consider to be best practices at the present time.&lt;/p&gt;&lt;p&gt;There is no canonical way to use PHP. This website aims to introduce new PHP developers to some topics which they may not discover until it is too late, and aims to give seasoned pros some fresh ideas on those topics they&rsquo;ve been doing for years without ever reconsidering. This website will also not tell you which tools to use, but instead offer suggestions for multiple options, when possible explaining the differences in approach and use-case.&lt;/p&gt;&lt;p&gt;This is a living document and will continue to be updated with more helpful information and examples as they become available.&lt;/p&gt;', 1, '2022-04-02 02:21:59'),
(11, 11, 5, 'Home for tech writers and readers', '1649332175_ezgif.com-gif-maker.jpg', '&lt;h2&gt;&lt;strong&gt;Blog on your personal domain&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;Map your custom domain in just seconds. Serve your blog over HTTPS with no extra configuration. Get a high performance, secure, and fully-optimized dev blog that delights your readers.&lt;/p&gt;', 1, '2022-04-07 17:49:35'),
(12, 11, 5, 'Everything you need to start blogging as a developer!', '1649332261_X9ebeNKkc08-00-01-39.png', '&lt;h1&gt;&lt;strong&gt;Join the dev community of over a million active developers.&lt;/strong&gt;&lt;/h1&gt;&lt;p&gt;Over 100,000 tech blogs and growing. Be part of an active community of developers, tech enthusiasts and creators. Blog on a personal domain, share ideas, and connect with the global tech community.&lt;/p&gt;', 1, '2022-04-07 17:51:01'),
(13, 11, 5, 'Introducing Hashnode for Teams', '1649332704_272401354_1303066366862628_8326811913343873477_n.jpg', '&lt;p&gt;Invite your editorial team and let multiple authors publish articles on the same blog.&lt;/p&gt;', 1, '2022-04-07 17:58:24'),
(14, 13, 6, 'There\'s still time to join the Deepgram Hackathon on DEV!', '1649332790_X9ebeNKkc08-00-02-05.png', '&lt;p&gt;The Deepgram x DEV hackathon has amazing prizes for all types of participants &mdash; whether you prefer to build an app, write a post, champion others, or all of the above! 5 Grand Prize winners will receive $1,500 USD and lots more.&lt;/p&gt;', 1, '2022-04-07 17:59:50'),
(15, 13, 5, 'Material Kit React - Open-Source React Template', '1649336197_9s7g9ndkx2c89scf27sl.webp', '&lt;p&gt;Hello coders!&lt;/p&gt;&lt;p&gt;This article presents an open-source &lt;a href=&quot;https://www.admin-dashboards.com/react-dashboards-curated-open-source-apps/&quot;&gt;React Template&lt;/a&gt; crafted and released for free by Creative-Tim. &lt;strong&gt;Material Kit 2 React&lt;/strong&gt; can be downloaded from Github (MIT License) and used for commercial projects or eLearning activities. For newcomers, React is a leading JS library used to code interactive user interfaces actively supported and versioned by Facebook.&lt;/p&gt;', 1, '2022-04-07 18:56:37'),
(16, 13, 5, 'Open Source Node.js Ecommerce Platform for Remix', '1649336335_i0yi2im7i4ey1zl82uhd.webp', '&lt;h2&gt;&lt;strong&gt;Introduction&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;In this tutorial, you&#039;ll learn how to build a front-end UI for &lt;a href=&quot;https://www.medusajs.com/&quot;&gt;Medusa&lt;/a&gt; using &lt;a href=&quot;https://remix.run/&quot;&gt;Remix&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;Medusa is an open source ecommerce platform in Node.js that provides you with many ecommerce features such as order management, RMA flows, customer management, and more. Medusa also focuses on providing a good developer experience allowing you to get started within minutes and with a strong support community and documentation to back it up.&lt;/p&gt;&lt;p&gt;Remix is a full-stack web framework that allows you to build slick user interfaces with a resilient user experience. It renders pages on the server, unlike most React frameworks.&lt;/p&gt;&lt;p&gt;For this tutorial, we&#039;ll only focus on the basics which include:&lt;/p&gt;', 1, '2022-04-07 18:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--
-- Creation: Apr 04, 2022 at 03:08 PM
-- Last update: Apr 07, 2022 at 09:16 PM
--

DROP TABLE IF EXISTS `post_comments`;
CREATE TABLE IF NOT EXISTS `post_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `post_comments`:
--

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `message`, `commented_on`, `created_at`) VALUES
(1, 11, 10, 'nice post', '2022-04-04 21:44:24', '2022-04-04 21:44:24'),
(2, 13, 10, 'The living document', '2022-04-04 21:45:05', '2022-04-04 21:45:05'),
(3, 13, 9, 'The Open API', '2022-04-04 21:45:32', '2022-04-04 21:45:32'),
(5, 13, 8, 'The first is the take-home coding interview.', '2022-04-04 23:14:24', '2022-04-04 23:14:24'),
(6, 13, 7, 'There are two ways to set up and activate your robot', '2022-04-04 23:15:05', '2022-04-04 23:15:05'),
(7, 11, 5, 'Artificial Intelligence (AI) has long been an essential part of any business', '2022-04-05 16:56:21', '2022-04-05 16:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment_replys`
--
-- Creation: Apr 05, 2022 at 03:06 PM
-- Last update: Apr 07, 2022 at 01:27 PM
--

DROP TABLE IF EXISTS `post_comment_replys`;
CREATE TABLE IF NOT EXISTS `post_comment_replys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `post_comment_replys`:
--

--
-- Dumping data for table `post_comment_replys`
--

INSERT INTO `post_comment_replys` (`id`, `user_id`, `comment_id`, `reply_message`, `commented_on`, `created_at`) VALUES
(6, 11, 2, 'agree with you', '2022-04-05 22:51:34', '2022-04-05 22:51:34'),
(7, 11, 2, 'thank you', '2022-04-05 22:56:47', '2022-04-05 22:56:47'),
(8, 11, 6, '@facewash agreed', '2022-04-05 23:58:19', '2022-04-05 23:58:19'),
(9, 13, 9, 'agree with you', '2022-04-07 19:20:24', '2022-04-07 19:20:24'),
(10, 11, 9, '@joyboy tank you', '2022-04-07 19:21:09', '2022-04-07 19:21:09'),
(11, 11, 9, '@joyboy tank you', '2022-04-07 19:27:18', '2022-04-07 19:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--
-- Creation: Apr 01, 2022 at 07:46 PM
-- Last update: Apr 07, 2022 at 06:51 PM
--

DROP TABLE IF EXISTS `threads`;
CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `thread_topic_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `thread_topic_id` (`thread_topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `threads`:
--   `thread_topic_id`
--       `thread_topics` -> `id`
--

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `user_id`, `thread_topic_id`, `title`, `body`, `published`, `created_at`, `update_at`) VALUES
(1, 11, 1, 'NSU Close', '&lt;p&gt;Is it real that NSU is Closed?&lt;/p&gt;', 1, '2022-04-01 21:17:48', '2022-04-02 01:46:27'),
(3, 13, 2, 'Fit Crackers Price Rise', '&lt;p&gt;Fit Crackers Price Rise to 20 taka.&lt;/p&gt;', 1, '2022-04-02 02:40:29', '2022-04-02 02:40:29'),
(4, 13, 3, 'Which Faculty is best for CSE 311? ', '&lt;p&gt;Can anyone please tell me which faculty is best for the grade?&lt;/p&gt;', 1, '2022-04-02 02:41:29', '2022-04-02 02:41:29'),
(5, 11, 3, 'How do you orient to a ', '&lt;p&gt;I started at Forem in October 2021, and needed to orient myself quickly to a code base that powered sites much beloved by their community.&lt;/p&gt;&lt;p&gt;So, let&#039;s talk &quot;How do you orient to a new to you code base?&quot;&lt;/p&gt;', 1, '2022-04-08 00:41:25', '2022-04-08 00:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `thread_comments`
--
-- Creation: Apr 07, 2022 at 07:17 PM
-- Last update: Apr 07, 2022 at 07:24 PM
--

DROP TABLE IF EXISTS `thread_comments`;
CREATE TABLE IF NOT EXISTS `thread_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `thread_id` (`thread_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `thread_comments`:
--   `thread_id`
--       `threads` -> `id`
--

--
-- Dumping data for table `thread_comments`
--

INSERT INTO `thread_comments` (`id`, `user_id`, `thread_id`, `message`, `commented_on`, `created_at`) VALUES
(2, 11, 5, 'Wayfinding in code-bases is very challenging. I know the Language Server Protocol is helping create an interface for code navigation via IDE-like behavior.', '2022-04-08 01:24:49', '2022-04-08 01:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `thread_comment_replys`
--
-- Creation: Apr 07, 2022 at 07:19 PM
-- Last update: Apr 07, 2022 at 07:33 PM
--

DROP TABLE IF EXISTS `thread_comment_replys`;
CREATE TABLE IF NOT EXISTS `thread_comment_replys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `thread_comment_replys`:
--

--
-- Dumping data for table `thread_comment_replys`
--

INSERT INTO `thread_comment_replys` (`id`, `user_id`, `comment_id`, `reply_message`, `commented_on`, `created_at`) VALUES
(1, 11, 2, 'It depends  For every project, I try and follow this flow:  Read the docs - get the most inconvenient thing out of the way first Read the specs or latest customer requests Try and understand: what\'s the goal of this software? what\'s the expected behavior?', '2022-04-08 01:29:29', '2022-04-08 01:29:29'),
(2, 11, 1, '@facewash hell yeah', '2022-04-08 01:33:16', '2022-04-08 01:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `thread_topics`
--
-- Creation: Mar 31, 2022 at 04:04 PM
--

DROP TABLE IF EXISTS `thread_topics`;
CREATE TABLE IF NOT EXISTS `thread_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `thread_topics`:
--

--
-- Dumping data for table `thread_topics`
--

INSERT INTO `thread_topics` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'News & Announcement', '<p>Latest News &amp; Updates!</p>', '2022-03-31 22:33:27'),
(2, 'General Discussion', '<p>Ask a question, post a suggestion, start a discussion</p>', '2022-03-31 23:06:22'),
(3, 'Course Review', '<p>Review courses that you want to study</p>', '2022-04-01 22:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--
-- Creation: Mar 18, 2022 at 04:35 PM
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `topics`:
--

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`, `created_at`) VALUES
(5, 'Programming', '<p>Programming is the process of creating a set of instructions that tell a computer how to perform a task.</p>', '2022-03-20 18:35:49'),
(6, 'Engineering', '<p>Engineering, the application of science to the optimum conversion of the resources of nature to the uses of humankind.</p>', '2022-03-20 18:36:44'),
(7, 'Robotics', '<p>Robotics is an interdisciplinary branch of computer science and engineering.</p>', '2022-03-20 18:37:17'),
(8, 'Finance', '<p>Finance is a broad term that describes activities associated with banking, leverage or debt, credit, capital markets, funds, and investments.</p>', '2022-03-20 18:38:13'),
(9, 'AI', '<p>Artificial intelligence (AI) is the ability of a computer or a robot controlled by a computer to do tasks that are usually done by humans because they require human intelligence and discernment.</p>', '2022-03-20 18:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Apr 06, 2022 at 03:14 PM
-- Last update: Apr 07, 2022 at 11:58 AM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_tagline` varchar(255) NOT NULL,
  `location` varchar(60) NOT NULL,
  `about_me` text NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `tw_link` varchar(255) NOT NULL,
  `lk_link` varchar(255) NOT NULL,
  `yt_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `first_name`, `last_name`, `profile_tagline`, `location`, `about_me`, `fb_link`, `tw_link`, `lk_link`, `yt_link`, `created_at`) VALUES
(11, 1, 'facewash', 'facewash@gmail.com', '$2y$10$AjJcQEaNyt9E1AKShPtyBeXgcUa8ZlhJGuLxkI0udcefJLXo2LKxm', 'face', 'wash', 'No#1 Facewash in the world', 'Bangladesh', 'As the first step in your skin-care routine, face wash plays a very important role in keeping your skin balanced.                                         ', 'https://www.facebook.com/facewash', 'https://twitter.com/facewash', 'https://www.linkedin.com/facewash', 'https://www.youtube.com/facewash', '2022-03-20 17:27:58'),
(13, 0, 'joyboy', 'joyboy@gmail.com', '$2y$10$TVggX8RtNakR1CC.ojrvxOl5nt1DH//gY2Cq6AKiZEt0qHMC2zCMG', 'Joy', 'Boy', 'I\'m Awesome', 'Outer World', 'Joy with no bound                                                                                    ', 'https://facebook.com/joyboy', 'https://twitter.com/joyboy', 'https://linkedin.com/joyboy', 'https://youtube.com/joyboy', '2022-03-20 21:51:23');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_ibfk_1` FOREIGN KEY (`thread_topic_id`) REFERENCES `thread_topics` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `thread_comments`
--
ALTER TABLE `thread_comments`
  ADD CONSTRAINT `thread_comments_ibfk_1` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table posts
--

--
-- Metadata for table post_comments
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'blog', 'post_comments', '{\"sorted_col\":\"`post_comments`.`commented_on` DESC\"}', '2022-04-05 11:33:16');

--
-- Metadata for table post_comment_replys
--

--
-- Metadata for table threads
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'blog', 'threads', '{\"sorted_col\":\"`threads`.`thread_topic_id` ASC\"}', '2022-04-07 21:28:38');

--
-- Metadata for table thread_comments
--

--
-- Metadata for table thread_comment_replys
--

--
-- Metadata for table thread_topics
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'blog', 'thread_topics', '{\"sorted_col\":\"`thread_topics`.`description` ASC\"}', '2022-04-01 19:46:28');

--
-- Metadata for table topics
--

--
-- Metadata for table users
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'blog', 'users', '{\"sorted_col\":\"`users`.`profile_tagline`  DESC\"}', '2022-04-06 19:14:26');

--
-- Metadata for database blog
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
