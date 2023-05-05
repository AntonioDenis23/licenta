package licenta.mapper;

import licenta.dto.UserDto;
import licenta.entity.User;
import org.mapstruct.Mapper;
import org.mapstruct.Mapping;

@Mapper(componentModel="spring")
public interface UserMapper {


    UserDto userEntityToUserDto(User entity);

    User userDtoToUserEntity(UserDto dto);

}
