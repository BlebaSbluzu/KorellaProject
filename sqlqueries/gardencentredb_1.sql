-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2024 at 06:23 AM
-- Server version: 8.0.34
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardencentredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int NOT NULL,
  `ProductName` varchar(45) NOT NULL,
  `Size` text NOT NULL,
  `Price` decimal(65,2) NOT NULL,
  `Season` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Description` text NOT NULL,
  `Location` text NOT NULL,
  `Watering` text NOT NULL,
  `Pruning` text NOT NULL,
  `Fertilizing` text NOT NULL,
  `PestDisease` text NOT NULL,
  `image` varchar(45) NOT NULL,
  `imageDiagram` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `ProductName`, `Size`, `Price`, `Season`, `Type`, `Description`, `Location`, `Watering`, `Pruning`, `Fertilizing`, `PestDisease`, `image`, `imageDiagram`) VALUES
(1, 'American Holly', '1-2 feet', 55.72, 'Winter', 'Evergreen Tree', 'American holly is a beautiful evergreen tree native to the eastern United States. Its known for its shiny, dark green leaves and bright red berries, which add a festive touch to landscapes, especially during the holidays. Growing up to 50 feet tall, its perfect for gardens and provides habitat for wildlife. Plus, its wood is used in crafts and decorations.', 'Choose a spot with well-drained soil and partial to full sun for your American holly.', 'Keep the soil consistently moist, especially during dry spells, but avoid overwatering.', 'Prune in late winter or early spring to shape the tree and remove dead or damaged branches.', 'Apply a balanced fertilizer in spring to promote healthy growth, following package instructions.', 'Watch for pests like scale insects and diseases such as leaf spot; treat promptly with appropriate measures if detected.', 'AmericanHolly.jpg', 'AmericanHollyGraph.jpg'),
(2, 'Winter Jasmine', '40-50cm', 15.99, 'Winter', 'deciduous shrub', 'Winter jasmine is a deciduous shrub known for its bright yellow flowers that bloom in late winter to early spring, adding cheerful color to the garden when little else is in bloom.', 'Plant in a location with well-drained soil and full sun to partial shade.', 'Water regularly, especially during dry spells, to keep the soil consistently moist but not waterlogged.', 'Prune after flowering to remove dead or overgrown branches and to shape the plant.', 'Apply a balanced fertilizer in spring to promote healthy growth and blooming.', 'Monitor for pests such as aphids and diseases like powdery mildew. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'WinterJasmine.jpg', 'jasminediagram.jpg'),
(3, 'Hellebore', '40cm', 15.00, 'Winter', 'Perennial herbaceous plant', 'Hellebores, also known as Christmas roses or Lenten roses, are beloved winter-blooming perennials prized for their elegant flowers and evergreen foliage. They produce nodding, cup-shaped flowers in shades of white, pink, purple, or green, often with delicate veining. Hellebores are shade-loving plants that thrive in woodland gardens, borders, and containers, bringing beauty to the winter garden.', 'Plant in well-drained soil in partial to full shade.', 'Water regularly during dry spells, keeping the soil consistently moist but not waterlogged.', 'Remove old, damaged, or diseased leaves in late winter or early spring to promote new growth and prevent the spread of diseases.', 'Apply a balanced fertilizer in early spring as new growth emerges to support healthy flowering.', 'Hellebores are generally resistant to pests and diseases, but occasional issues such as aphids or leaf spot may occur. Monitor regularly and treat promptly if detected.', 'Helebore.jpg', 'helleboreDiagram.jpg'),
(4, 'Winterberry', '60-80cm', 34.95, 'Winter', 'Deciduous shrub', 'Winterberry is a deciduous shrub valued for its vibrant display of bright red berries that persist through the winter months, providing color and interest when many other plants are dormant. Female plants produce the showy berries, which attract birds and wildlife to the garden. Winterberry is an excellent choice for wetland gardens, borders, or naturalized areas.', 'Plant in moist, acidic soil in full sun to partial shade.', 'Water regularly, especially during dry spells, to keep the soil consistently moist but not waterlogged.', 'Minimal pruning is needed; remove dead or damaged branches in late winter or early spring to maintain the shrubs shape.', 'Apply a balanced fertilizer in early spring before new growth begins to support healthy berry production.', 'Winterberry is generally pest and disease resistant, but occasional issues such as aphids or leaf spot may occur. Monitor regularly and treat promptly if detected.', 'winterberry.jpg', 'winterberrydiagram.jpg'),
(5, 'Camellia', '30-40cm', 7.50, 'Winter', 'Evergreen shrub', 'Camellias are prized evergreen shrubs known for their exquisite flowers that bloom in the winter and early spring. They produce large, showy blooms in shades of white, pink, red, and sometimes yellow. Camellias have glossy, dark green foliage that provides year-round interest in the garden. They are popular as specimen plants, hedges, or in containers.', 'Plant in well-drained, acidic soil with partial shade to filtered sunlight.', 'Water regularly to keep the soil consistently moist but not waterlogged, especially during dry periods.', 'Prune lightly after flowering to remove dead or overgrown branches and to shape the shrub as desired.', 'Apply a balanced fertilizer formulated for acid-loving plants in late winter or early spring to promote healthy growth and flowering.', 'Watch for pests such as scale insects and diseases like camellia leaf gall or root rot. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.\n', 'Camellia.jpg', 'CamelliaDiagram.jpg'),
(6, 'Sunflowers', '3-15feet', 16.99, 'Summer', 'Annual Flower', 'Sunflowers are iconic for their large, daisy-like flower heads with vibrant yellow petals surrounding a central disk of seeds. They come in various sizes and varieties, with some producing single blooms while others produce branching stems with multiple flowers.', 'Plant sunflowers in a sunny spot with well-drained soil.', 'Water regularly, especially during dry spells, keeping the soil consistently moist but not waterlogged.', 'Deadhead spent flowers to encourage continuous blooming. If growing tall varieties, consider staking to support heavy flower heads.', 'Apply a balanced fertilizer or compost at planting and again when flowers begin to form to promote healthy growth and blooming.', 'Watch for pests such as aphids, caterpillars, and birds feeding on seeds, as well as diseases like powdery mildew. Use insecticidal soap or neem oil for pests and practice good garden hygiene to prevent disease.', 'sunflower.jpg', 'sunflowergraph.jpg'),
(7, 'Common Pear', '80-100cm', 32.95, 'Late Summer', 'Deciduous fruit tree', 'Common pears, such as those from the Pyrus communis species, are popular fruit-bearing trees prized for their juicy, sweet fruit. They produce white flowers in spring, followed by pear-shaped fruits in late summer to early autumn. Common pear varieties include Bartlett, Anjou, and Bosc, each with its own flavor profile and ripening time.', 'Plant in well-drained soil with full sun exposure.', 'Water regularly, especially during dry periods, ensuring consistent soil moisture.', 'Prune in late winter or early spring to remove dead or diseased branches, improve air circulation, and shape the tree.', 'Apply a balanced fertilizer in early spring before new growth begins, following package instructions.', 'Monitor for pests such as pear psylla, codling moth, and diseases like fire blight and pear scab. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'commonpear.jpg', 'commonpeardiagram.jpg'),
(8, 'Lavender', '7cm', 9.50, 'Summer', 'Perennial herb', 'Lavender is a fragrant and versatile perennial herb known for its aromatic foliage and spikes of small, fragrant flowers in shades of purple, blue, pink, and white. It thrives in hot, sunny conditions and is cherished for its culinary, medicinal, and ornamental uses. Lavender attracts pollinators like bees and butterflies and is a staple in herb gardens, borders, and rock gardens.', 'Plant in well-drained soil with full sun exposure.', 'Water sparingly once established, as lavender prefers dry conditions. Allow the soil to dry out between waterings to prevent root rot.', 'Prune lightly after flowering to maintain shape and encourage bushier growth. Avoid cutting into old wood, as lavender plants may not regenerate from it.', 'Lavender typically does not require regular fertilizing. If needed, apply a balanced fertilizer sparingly in spring.', 'Lavender is generally resistant to pests and diseases, but watch for issues like root rot in poorly drained soil and aphids during periods of high humidity.\n', 'lavender.jpg', 'lavenderdiagram.jpg'),
(9, 'Bougainvillea', '99cm', 11.50, 'Summer', 'Evergreen climbing vine or shrub', 'Bougainvillea is a stunning tropical plant known for its vibrant, papery bracts that surround small, inconspicuous flowers. These bracts come in a variety of colors, including shades of pink, purple, red, orange, and white. Bougainvillea thrives in hot, sunny climates and is prized for its ability to cover fences, walls, and trellises with its colorful foliage.', 'Plant in well-drained soil with full sun exposure.', 'Water regularly during the growing season, allowing the soil to dry out slightly between waterings. Bougainvillea prefers slightly drier conditions once established.', 'Prune lightly after flowering to remove dead or overgrown branches and to shape the plant as desired. Wear gloves to avoid thorns.', 'Apply a balanced fertilizer monthly during the growing season to promote flowering and vigorous growth.', 'Watch for pests such as aphids, mealybugs, and caterpillars, as well as diseases like powdery mildew and leaf spot. Treat promptly with appropriate measures if detected.', 'bougainvillea.jpg', 'bougainvilleadiagram.jpg'),
(10, 'Rose of Sharon', '60-80cm', 50.16, 'Summer', 'Deciduous shrub', 'Rose of Sharon is a beautiful and easy-to-grow shrub known for its large, showy flowers that resemble hibiscus blooms. These flowers come in various colors, including shades of pink, white, purple, and blue, and attract pollinators like bees and butterflies. Rose of Sharon is tolerant of heat and drought and blooms prolifically throughout the summer months, adding color and charm to gardens and landscapes.', 'Plant in well-drained soil with full sun exposure.', 'Water regularly during the growing season, especially during dry spells, to keep the soil consistently moist but not waterlogged.', 'Prune in late winter or early spring to remove dead or damaged branches and to shape the shrub. Deadhead spent flowers to encourage continuous blooming.', 'Apply a balanced fertilizer in early spring before new growth begins to promote healthy foliage and flowering.', 'Monitor for pests such as aphids, whiteflies, and Japanese beetles, as well as diseases like powdery mildew and leaf spot. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'RoseofSharon.jpg', 'RoseofSharonDiagram.jpg'),
(11, 'Sugar Maple', '80-115feet', 12.00, 'Autumn', 'Acer saccharum Tree', 'The Sugar Maple is a majestic, large-sized tree known for its stunning fall foliage, which bursts into vibrant shades of red, orange, and yellow. Its a favorite for landscaping due to its ornamental value and the delicious maple syrup produced from its sap. With proper care, this tree can thrive in various landscapes, providing shade and beauty throughout the year.', 'Plant in a location with well-drained soil and full to partial sun.', 'Provide regular watering, especially during dry periods, to keep the soil consistently moist but not waterlogged.', 'Prune in late winter or early spring to remove dead or diseased branches and to shape the tree as desired.', 'Apply a balanced fertilizer in early spring before new growth begins, following package instructions.', 'Watch for pests such as aphids, scale insects, and diseases such as tar spot and verticillium wilt. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'SugarMaple.jpg', 'sugarmaplegraph.jpg'),
(12, 'Copper Beech', '175cm', 59.99, 'Autumn', 'Bare Root', 'Copper beech is a stunning deciduous tree prized for its deep purple foliage, which creates a dramatic statement in any landscape. Its rich color stands out especially in the spring and fall, making it a favorite ornamental tree.', 'Plant in a location with well-drained soil and full sun to partial shade.', 'Provide regular watering, especially during dry spells, to keep the soil consistently moist but not waterlogged.', 'Provide regular watering, especially during dry spells, to keep the soil consistently moist but not waterlogged.', 'Apply a balanced fertilizer in early spring before new growth begins, following package instructions.', 'Keep an eye out for pests such as aphids, caterpillars, and diseases like powdery mildew. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'copperbeech1.jpg', 'copperbeechdiagram.jpg'),
(13, 'Chrysanthemum', '2 feet', 7.99, 'Autumn', 'Perennial herbaceous plant', 'Chrysanthemums, often called mums, are popular flowering plants cherished for their abundant and colorful blooms in the autumn garden. They come in a wide range of colors, including shades of yellow, orange, red, pink, purple, and white, and offer various flower forms such as daisy-like, pompon, and spider-shaped blooms. Chrysanthemums are commonly used for fall decorations, floral arrangements, and garden borders.', 'Plant in well-drained soil with full sun exposure.', 'Provide regular watering during dry spells to keep the soil consistently moist but not waterlogged.', 'Pinch back young plants in spring and early summer to encourage bushier growth and more flower buds. Deadhead spent blooms to promote continuous flowering.', 'Apply a balanced fertilizer in early spring and again after flowering to support healthy growth and blooming.', 'Watch for pests such as aphids, spider mites, and diseases like powdery mildew and rust. Treat promptly with appropriate measures if detected.', 'Chrysanthemum.jpg', 'ChrysanthemumDiagram.jpg'),
(14, 'Japanese Maple', '70-80cm', 55.99, 'Autumn', 'Deciduous tree', 'Japanese maples are exquisite small to medium-sized trees prized for their elegant form, delicate foliage, and brilliant autumn colors. Their leaves turn shades of red, orange, yellow, and purple in the fall, creating a picturesque scene in the garden. Japanese maples offer various cultivars with different leaf shapes, sizes, and colors, making them versatile choices for landscapes, containers, and bonsai.', ' Plant in well-drained soil with dappled shade to partial sun exposure to protect delicate foliage from scorching.', 'Provide regular watering, especially during dry periods, to keep the soil consistently moist but not waterlogged.', 'Prune in late winter to early spring to remove dead or crossing branches and to enhance the trees shape and structure.', 'Apply a balanced fertilizer in early spring before new growth begins to support healthy foliage and autumn coloration.', 'Monitor for pests such as aphids, scale insects, and diseases like verticillium wilt and leaf scorch. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'japanesemaple.jpg', 'japanesemaplediagram.jpg'),
(15, 'Sedum', '9cm', 4.00, 'Autumn', 'Perennial succulent', 'Sedums, also known as stonecrops, are drought-tolerant perennial plants prized for their attractive foliage and late-season blooms. They feature fleshy leaves arranged in rosettes and produce clusters of small, star-shaped flowers in shades of pink, red, white, and yellow. Sedums are valued for their ability to thrive in poor soil conditions and their attractiveness to pollinators like bees and butterflies.', 'Plant in well-drained soil with full sun exposure.', 'Water sparingly, as sedums are drought-tolerant plants. Allow the soil to dry out between waterings to prevent root rot.', 'Deadhead spent flower clusters to encourage continued blooming and maintain a tidy appearance.', 'Sedums typically do not require fertilizing, but if needed, apply a balanced fertilizer sparingly in spring.', 'Sedums are relatively pest and disease resistant but may occasionally face issues like aphids and root rot in poorly drained soil. Ensure good drainage and monitor for pests, treating promptly if detected.', 'sedum.jpg', 'sedumdiagram.jpg'),
(16, 'Blackthorn Tree', '60-90cm', 2.50, 'Spring', 'Deciduous shrub or small tree', 'Blackthorn, also known as Prunus spinosa, is a hardy deciduous shrub or small tree native to Europe and parts of Asia. It is prized for its early spring display of delicate white flowers that bloom before the leaves emerge. After flowering, it produces small, tart, blue-black fruits known as sloes, which are often used in jams, jellies, and alcoholic beverages.', 'Plant in well-drained soil in full sun to partial shade.', 'Water regularly during the growing season, especially during dry periods, to keep the soil consistently moist.', 'Prune in late winter or early spring to remove dead, damaged, or crossing branches, and to maintain its shape.', 'Apply a balanced fertilizer in early spring to promote healthy growth and flowering.', 'Monitor for pests such as aphids, caterpillars, and diseases like brown rot and canker. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'blackthorn.jpg.png', 'blackthorndiragram.jpg'),
(17, 'Whitebeam', '2.5-3m', 150.00, 'Spring', 'Deciduous tree', 'Whitebeam trees, belonging to the Sorbus genus, are deciduous trees known for their attractive foliage and clusters of white flowers in spring, followed by small red or orange berries in summer to early autumn. They feature distinctive silver-gray leaves with silvery undersides, adding ornamental value to landscapes.', 'Plant in well-drained soil with full sun to partial shade.', ' Provide regular watering, especially during dry spells, to keep the soil consistently moist but not waterlogged.', ' Prune in late winter or early spring to remove dead or diseased branches and to shape the tree as desired.', 'Apply a balanced fertilizer in early spring before new growth begins, following package instructions.', 'Monitor for pests such as aphids, caterpillars, and diseases like powdery mildew and fire blight. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'whitebeam.webp', 'whitebeamdiagram.jpg'),
(18, 'English Elm', '12m', 103.89, 'Spring', 'Deciduous tree', 'English elm (Ulmus minor) is a majestic deciduous tree native to Europe and parts of Asia. It is known for its broad, spreading canopy and distinctive serrated leaves. In spring, English elm produces small, inconspicuous flowers before its leaves emerge. It can reach impressive heights, making it a valuable shade tree in landscapes.', 'Plant in well-drained soil with full sun to partial shade.', 'Water deeply and regularly, especially during dry periods, to keep the soil consistently moist but not waterlogged.', 'Prune in late winter or early spring to remove dead, diseased, or crossing branches, and to maintain its shape.', 'Apply a balanced fertilizer in early spring to promote healthy growth and vigor.', 'Monitor for pests such as elm leaf beetles and diseases like Dutch elm disease. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.\n', 'englishelm.jpg', 'englishelmdiagram.jpg'),
(19, 'Pacific Dogwood', '25cm', 47.02, 'Spring', 'Deciduous tree', 'Pacific dogwood (Cornus nuttallii) is an iconic native tree of the Pacific Northwest known for its stunning spring display of large, white or pinkish flowers. These flowers surround a cluster of tiny yellow-green blooms, creating a captivating sight. Its leaves turn reddish-purple in autumn, adding to its seasonal beauty.', 'Plant in well-drained soil with partial shade to full sun exposure.', 'Provide regular watering, especially during dry spells, to keep the soil consistently moist but not waterlogged.', 'Minimal pruning is necessary; remove dead or damaged branches in late winter or early spring.', 'Apply a balanced fertilizer in spring to promote healthy growth and flowering.', 'Watch for pests such as dogwood borers and diseases like powdery mildew and anthracnose. Treat promptly with appropriate measures if detected. Regular inspection and maintenance can help prevent issues.', 'pacificdogwood.jpg', 'pacificdogwooddiagram.jpg'),
(20, 'Pink Lilacs', '20-30cm', 7.50, 'Spring', 'Spring flower', 'A stunning addition to any garden! With its blush-pink blossoms and sweet fragrance, this shrub is sure to enchant. Perfect for borders or standalone beauty,it thrives in various conditions. Add a touch of springtime romance to your garden today!', 'Plant in a sunny spot with well-draining soil', 'Keep the soil evenly moist, especially during the first growing season', 'Prune after flowering to remove spent blooms and shape the plant and remove old or damaged branches to encourage new growth', 'Apply a balanced fertilizer in early spring before new growth begins', 'Monitor for pests and diseases regularly and treat promptly', 'Lilacs(Spring).jpg', 'lilac pruning.jpg'),
(21, 'Japanese Cherry Blossom', '6 feet', 39.99, 'Spring', 'Cherry Tree', 'The epitome of springtime allure! With delicate pink blossoms,these ornamental cherry trees add an enchanting touch to any garden. Renowned for vibrant blooms that burst forth in early spring, they create a captivating focal point, drawing admiration from all who behold them. Easy to care for and adaptable,our Pink Blossom Cherries bring seasonal charm and elegance to your outdoor space.', 'Plant in a sunny spot with good air circulation', 'Keep the soil consistently moist, especially during dry spells', 'Prune in late winter to remove dead or crossing branches and promote better flowering.', 'Apply organic mulch to retain moisture and suppress weeds around the trees base', ' Monitor for pests and diseases regularly and treat promptly', 'Flowering Cherries (Spring).jpg', 'Cherry-Blossom-Tree-Growth-Rate-Chart.png'),
(22, 'Arthur Bell Roses', '60cm', 9.95, 'Summer', 'Rose flower', 'Arthur Bell Roses are a breathtaking sight in any garden! Their vibrant yellow blossoms bring a burst of sunshine and warmth to your outdoor space. With a delightful fragrance and elegant blooms, these roses are perfect for adding a touch of elegance to borders or as standalone specimens. Thriving in various conditions, Arthur Bell Roses are easy to care for, making them a versatile and beloved choice for gardeners seeking beauty and charm.', 'Plant in a sunny spot with well-draining soil', 'Keep the soil evenly moist, especially during the first growing season', 'Prune after flowering to remove spent blooms and shape the plant. Additionally, remove old or damaged branches to encourage new growth', 'Apply a balanced fertilizer in early spring, to provide essential nutrients for healthy growth', 'Monitor for pests and diseases regularly and treat promptly', 'ArthurBellRoses.jpg', 'abroses.jpg.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `Password`, `email`, `date`) VALUES
(1, 'admin', 'Password1', 'admin@gmail.com', '2022-04-23 23:00:00'),
(3, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', NULL),
(4, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(5, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(6, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(7, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(8, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(9, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(10, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(11, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(12, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(13, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(14, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(15, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(16, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(17, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(18, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(19, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(20, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-22 23:00:00'),
(21, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-23 23:00:00'),
(22, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-23 23:00:00'),
(23, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-23 23:00:00'),
(24, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-23 23:00:00'),
(25, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-26 23:00:00'),
(26, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-26 23:00:00'),
(27, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-26 23:00:00'),
(28, 'henry', 'Nooblol1122!', 'aaaa@gmail.com', '2024-04-26 23:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
