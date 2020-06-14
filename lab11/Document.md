**1、cookie和session的作用：**  
cookie:是存储在客户端机器上的小段信息,提供了持续的存储识别数据的机制
session:是一种服务器端状态持久化机制，将每个用户相对应的相关信息以内存或文件形式保存在服务器端

**2、cookie和session的优劣**  
cookie:优点：
          1、数据持久性
          2、不需要任何服务器资源，因为cookie是存储在客户端并发送给服务器读取
          3、可配置到期规则，控制cookie的生命周期，使之不会永远有效，偷盗者可能拿到的是一个过期的cookie
          4、简单性，基于文件的轻量结构
          5、通过良好的编程，控制保存在cookie中的Session对象的大小
          6、通过加密和安全传输技术（ssl），减少cookie被破解的可能性
          7、只要cookie中不存放敏感的数据，即使被盗也不会有重大损失
      缺点：
         1、 cookie的数量和长度都有限制
         2、潜在的安全风险：cookie可能被截取篡改，如果cookie被拦截，就可能会获取到所有的Session信息
         3、用户配置为禁用，有的用户禁用了浏览器或者客户端设备接受cookie的能力，因此限制了这一功能     
session:优点：
         1、可以存储在内存或文件中，内存性能好，但服务器重启时信息易丢失；文件则反之
         2、同一SessionID始终给同一服务器
         3、通过某种共享机制（如数据库、缓存等）使所有服务器都能访问
        缺点：
         1、Session变量和cookies是同一类型的。如果某用户将浏览器设置为不兼容任何cookie，那么该用户就无法使用这个Session变量！ 
         2、因为创建Session变量有很大的随意性，可随时调用，不需要开发者做精确地处理，所以，过度使用session变量将会导致代码不可读而且不好维护。 