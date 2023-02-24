package licenta.mapper;

import javax.annotation.processing.Generated;
import licenta.dto.UserDto;
import licenta.entity.User;
import org.springframework.stereotype.Component;

@Generated(
    value = "org.mapstruct.ap.MappingProcessor",
    date = "2023-02-24T17:24:49+0200",
    comments = "version: 1.4.2.Final, compiler: javac, environment: Java 11.0.16.1 (Eclipse Adoptium)"
)
@Component
public class UserMapperImpl implements UserMapper {

    @Override
    public UserDto userEntityToUserDto(User entity) {
        if ( entity == null ) {
            return null;
        }

        UserDto userDto = new UserDto();

        userDto.setUserName( entity.getUserName() );
        userDto.setPassword( entity.getPassword() );

        return userDto;
    }

    @Override
    public User userDtoToUserEntity(UserDto dto) {
        if ( dto == null ) {
            return null;
        }

        User user = new User();

        user.setUserName( dto.getUserName() );
        user.setPassword( dto.getPassword() );

        return user;
    }
}
